<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $primaryKey = 'ID_Transaksi';

    protected $fillable = [
        'User_ID_User',
        'Buku_ID_Buku',
        'Tipe_Transaksi',
        'Status',
        'Tanggal_Peminjaman',
        'Tanggal_Pengembalian',
        'Tanggal_Pemesanan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_ID_User');
    }

    public function buku()
    {
        return $this->belongsTo(Book::class, 'Buku_ID_Buku');
    }

    
}