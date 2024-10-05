<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'buku';        // Specify custom table name
    protected $primaryKey = 'ID_Buku'; // Specify custom primary key

    protected $fillable = [
        'Judul',
        'Sampul',
        'Author',
        'Deskripsi',
        'Halaman',
        'Penerbit',
        'Tahun',
        'Berat',
        'ISBN',
        'Lebar',
        'Panjang',
        'Bahasa',
        'Kategori',
        'Stok',
        'Akses'
    ];

    // If you want to specify which attributes should be cast to native types
    protected $casts = [
        'Tahun' => 'integer',
        'Berat' => 'integer',
        'ISBN' => 'integer',
        'Lebar' => 'float',
        'Panjang' => 'float',
        'Stok' => 'integer'
    ];

    // If you want to specify default values for any attributes
    protected $attributes = [
        'Stok' => 0,
        'Akses' => 'Dapat dipinjam'
    ];
}