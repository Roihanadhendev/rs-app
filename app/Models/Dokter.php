<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokters';
    protected $fillable = ['nama', 'spesialis', 'alamat', 'telepon'];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
