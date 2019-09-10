<?php

namespace App\Http\Controllers;

use App\Anime;
use App\Episode;
use App\Rating;
use App\EpisodeImages;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Anime $anime)
    {
        //$animes = Anime::paginate(6);
        $summer = Anime::where('genre_id', 1)->get();
        $just_updated = Anime::where('genre_id', 2)->get();
        $continuing_simulcasts = Anime::where('genre_id', 3)->get();
        $popular = Anime::where('genre_id', 4)->get();
        $sports = Anime::where('genre_id', 5)->get();
        $friendship = Anime::where('genre_id', 6)->get();
        $shonen = Anime::where('genre_id', 7)->get();
        $vintage = Anime::where('genre_id', 8)->get();
        $self_improvement = Anime::where('genre_id', 9)->get();
        $quiet_life = Anime::where('genre_id', 10)->get();
        $music = Anime::where('genre_id', 11)->get();
        $spooky = Anime::where('genre_id', 12)->get();
        $nineties = Anime::where('genre_id', 13)->get();

        return view('index', [
            'summer' => $summer,
            'just_updated' => $just_updated,
            'continuing_simulcasts' => $continuing_simulcasts,
            'popular' => $popular,
            'sports' => $sports,
            'friendship' => $friendship,
            'shonen' => $shonen,
            'vintage' => $vintage,
            'self_improvement' => $self_improvement,
            'quiet_life' => $quiet_life,
            'music' => $music,
            'spooky' => $spooky,
            'nineties' => $nineties
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Anime $anime)
    {
        return view('show', [
            'anime' => $anime,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function edit(Anime $anime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anime $anime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anime $anime)
    {
        //
    }
}
