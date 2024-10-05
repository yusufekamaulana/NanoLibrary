<?php

// app/Models/Portfolio.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'buku';        // Specify custom table name
    protected $primaryKey = 'ID_Buku'; // Specify custom primary key

    protected $fillable = [
        'Judul',	'Sampul',	'Author',	'Tahun',	'Kategori',	'Stok',	'Dipinjam',	'Status',	'Akses', 'Ketersediaan'
    ];
}

