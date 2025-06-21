<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'summary',
        'stok',
        'image',
        'genre_id'
    ];

    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    public function comments(){
        return $this->hasMany(Comments::class);
    }
}
