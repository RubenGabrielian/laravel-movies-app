<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        function changeValue ($y) {
            $y = $y + 5;
        }

        $myNumber = 8;

        changeValye(8);

        die();

        $popularMovies = Http::get
        ('https://api.themoviedb.org/3/movie/popular?api_key=7d768124f4ce143511f3211c6fa9393a&language=en-US&page=1')
            ->json()['results'];

        $nowPlaying = Http::get
        ('https://api.themoviedb.org/3/movie/now_playing?api_key=7d768124f4ce143511f3211c6fa9393a&language=en-US&page=1')
            ->json()['results'];

        $generesArray = Http::get
        ('https://api.themoviedb.org/3/genre/movie/list?api_key=7d768124f4ce143511f3211c6fa9393a&language=en-US')
            ->json()['genres'];

        $genres = collect($generesArray)->mapWithKeys(function ($gener) {
            return [$gener['id'] => $gener['name']];
        });

        return view('index', [
            'popularMovies' => $popularMovies,
            'nowPlaying' => $nowPlaying,
            'genres' => $genres
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Http::get
            ('https://api.themoviedb.org/3/movie/' . $id .
            '?api_key=7d768124f4ce143511f3211c6fa9393a&append_to_response=credits,videos,images')
            ->json();


        return view('show', [
            'movie' => $movie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
