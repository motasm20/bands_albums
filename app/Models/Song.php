<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{

    protected $fillable = ['title', 'singer'];

    public function albums()
    {
        return $this->belongsToMany(Album::class, 'album_song');
    }

}
