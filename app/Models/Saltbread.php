<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saltbread extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'rasa',
        'harga',
        'stok',
        'tekstur',
        'status',
        'foto',
    ];
}