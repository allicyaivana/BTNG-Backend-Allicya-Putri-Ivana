<?php

namespace Database\Seeders;

use App\Models\Saltbread;
use Illuminate\Database\Seeder;

class SaltbreadSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Classic Butter Saltbread',
                'rasa' => 'Original Butter',
                'harga' => 18000,
                'stok' => 50,
                'tekstur' => 'Crispy Outside, Soft Inside',
                'status' => 'tersedia',
                'foto' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff',
            ],
            [
                'nama' => 'Truffle Garlic Saltbread',
                'rasa' => 'Truffle Garlic',
                'harga' => 28000,
                'stok' => 30,
                'tekstur' => 'Chewy & Rich',
                'status' => 'tersedia',
                'foto' => 'https://images.unsplash.com/photo-1586444248902-2f64eddc13df',
            ],
            [
                'nama' => 'Smoked Cheese Saltbread',
                'rasa' => 'Cheese',
                'harga' => 24000,
                'stok' => 20,
                'tekstur' => 'Crispy & Melty',
                'status' => 'tersedia',
                'foto' => 'https://images.unsplash.com/photo-1549931319-a545dcf3bc73',
            ],
            [
                'nama' => 'Matcha Cream Saltbread',
                'rasa' => 'Matcha',
                'harga' => 26000,
                'stok' => 0,
                'tekstur' => 'Soft & Creamy',
                'status' => 'habis',
                'foto' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a',
            ],
            [
                'nama' => 'Honey Almond Saltbread',
                'rasa' => 'Honey Almond',
                'harga' => 25000,
                'stok' => 15,
                'tekstur' => 'Crunchy',
                'status' => 'tersedia',
                'foto' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff',
            ],
        ];

        foreach ($data as $item) {
            Saltbread::create($item);
        }
    }
}
