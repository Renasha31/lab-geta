<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penelitian extends Model
{
    protected $fillable = [
        'isi'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'penulis_id');
    }
}
