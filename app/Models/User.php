<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'user';        // Specify custom table name
    protected $primaryKey = 'ID_User'; // Specify custom primary key

    protected $fillable = [
        'Role', 'Email', 'Password', 'NIM', 'Nama', 'No_Telp', 'Program_Studi', 'Angkatan',
    ];

    protected $hidden = [
        'Password', 'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->Password;
    }

    // Override the method to specify the username field
    public function getAuthIdentifierName()
    {
        return 'Email';
    }
    
}
