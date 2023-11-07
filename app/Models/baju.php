<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class baju extends Model
{
    use HasFactory;

    protected $table = "baju";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
 
     */
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'ukuran',
        'warna',
        'stok',
        'gambar',
    ];
}
