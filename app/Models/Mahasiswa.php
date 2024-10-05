<?php

// app/Models/Portfolio.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'user';        // Specify custom table name
    protected $primaryKey = 'ID_User'; // Specify custom primary key

    protected $fillable = [
        'Email', 'NIM', 'Nama', 'No_Telp', 'Program_Studi', 'Angkatan',
    ];
}

