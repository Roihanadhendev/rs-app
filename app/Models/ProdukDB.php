<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukDB extends Model
{
    use HasFactory;

    protected $table = 'produks';
    protected $fillable = ['nama', 'harga', 'stok', 'deskripsi', 'foto'];
}
