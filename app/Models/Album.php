<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    protected $fillable = ['name', 'year', 'times_sold', 'band_id'];

    public function band()
    {
        return $this->belongsTo(Band::class);
    }

    public function songs()
    {
        return $this->belongsToMany(Song::class, 'album_song');
    }
}
