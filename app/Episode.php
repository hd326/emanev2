<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
use App\Rating;

class Episode extends Model
{
    public function rate($number, $user = null)
    {
        if ($number > 5 || $number < 1) {
            throw new InvalidArgumentException('Ratings must be between 1-5');
        }

        $rating = Rating::firstOrNew([
            'user_id' => $user ? $user->id : auth()->id,
            'episode_id' => $this->id
        ]);
        // we get the instance or we create it

        $rating->fill(['rating' => $number])->save();
        // then we fill it with a rating
    }
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function rating()
    {
        return $this->ratings->avg('rating');
    }

    public function images()
    {
        return $this->hasMany(EpisodeImages::class, 'id');
    }
}
