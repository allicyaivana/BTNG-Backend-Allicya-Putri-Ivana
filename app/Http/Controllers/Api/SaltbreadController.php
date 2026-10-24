<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Saltbread;
use App\Http\Resources\SaltbreadResource;
use Illuminate\Http\Request;

class SaltbreadController extends Controller
{
    // GET /api/saltbreads
    public function index()
    {
        $saltbreads = Saltbread::latest()->get();
        return new SaltbreadResource(true, 'Daftar saltbread berhasil diambil', $saltbreads);
    }

    // POST /api/saltbreads
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'    => 'required|string|max:255',
            'rasa'    => 'required|string|max:100',
            'harga'   => 'required|numeric|min:0',
            'stok'    => 'required|integer|min:0',
            'tekstur' => 'required|string',
            'status'  => 'required|in:tersedia,habis',
            'foto'    => 'nullable|url',
        ]);

        $saltbread = Saltbread::create($validated);

        return (new SaltbreadResource(true, 'Data saltbread berhasil ditambahkan', $saltbread))
            ->response()
            ->setStatusCode(201);
    }

    // GET /api/saltbreads/{id}
    public function show($id)
    {
        $saltbread = Saltbread::find($id);

        if (!$saltbread) {
            return response()->json(['message' => 'Data saltbread tidak ditemukan'], 404);
        }

        return new SaltbreadResource(true, 'Detail data saltbread berhasil diambil', $saltbread);
    }

    // PUT/PATCH /api/saltbreads/{id}
    public function update(Request $request, $id)
    {
        $saltbread = Saltbread::find($id);

        if (!$saltbread) {
            return response()->json(['message' => 'Data saltbread tidak ditemukan'], 404);
        }

        $validated = $request->validate([
            'nama'    => 'sometimes|required|string|max:255',
            'rasa'    => 'sometimes|required|string|max:100',
            'harga'   => 'sometimes|required|numeric|min:0',
            'stok'    => 'sometimes|required|integer|min:0',
            'tekstur' => 'sometimes|required|string',
            'status'  => 'sometimes|required|in:tersedia,habis',
            'foto'    => 'nullable|url',
        ]);

        $saltbread->update($validated);

        return new SaltbreadResource(true, 'Data saltbread berhasil diperbarui', $saltbread);
    }

    // DELETE /api/saltbreads/{id}
    public function destroy($id)
    {
        $saltbread = Saltbread::find($id);

        if (!$saltbread) {
            return response()->json(['message' => 'Data saltbread tidak ditemukan'], 404);
        }

        $saltbread->delete();

        return response()->json(['message' => 'Data saltbread berhasil dihapus'], 200);
    }
}