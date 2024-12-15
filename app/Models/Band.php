<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $fillable = ['name', 'genre', 'founded', 'active_till'];
}
