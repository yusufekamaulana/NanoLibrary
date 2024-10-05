<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';
    protected $primaryKey = 'ID_Pemesanan';
    public $incrementing = false; // Karena ID_Pemesanan adalah string
    public $timestamps = false;

    protected $fillable = [
        'ID_Pemesanan',
        'User_ID_User',
        'Buku_ID_Buku',
        'Tanggal_Pemesanan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_ID_User', 'ID_User');
    }

    public function buku()
    {
        return $this->belongsTo(Book::class, 'Buku_ID_Buku', 'ID_Buku');
    }
}
