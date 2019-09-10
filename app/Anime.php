<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $with = ['images'];
    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function images()
    {
        return $this->hasOne(AnimeImages::class, 'id');
    }
}
