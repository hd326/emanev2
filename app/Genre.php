<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function animes()
    {
        return $this->belongsToMany(Anime::class);
    }
    //$animes->90s
}
