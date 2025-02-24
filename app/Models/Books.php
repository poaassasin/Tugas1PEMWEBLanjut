<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'penulis_id'];

    public function penulis()
    {
        return $this->belongsTo(Penulis::class);
    }
}