<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penulis extends Model
{
    protected $fillable = [
        'nama_penulis',
        'email',
        'password'
    ];
}
