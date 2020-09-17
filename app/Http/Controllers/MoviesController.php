<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\MoviesModel;
use App\Http\Resources\Movies as MoviesResource;
use App\Models\MoviesModel as ModelsMoviesModel;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get movies
        $movies = MoviesModel::paginate(10);

        //return collection of article as a resource
        return MoviesResource::collection($movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = $request->isMethod('put') ? MoviesModel::findOrFail($request->movie_id) : new MoviesModel;

        $movie->movie_id = $request->input('movie_id');
        $movie->movie_title = $request->input('movie_title');
        $movie->genre = $request->input('genre');
        $movie->rating = $request->input('rating');
        $movie->length = $request->input('length');
        $movie->year = $request->input('year');
        $movie->stars = $request->input('stars');
        $movie->directors = $request->input('directors');
        $movie->synopsis = $request->input('synopsis');

        if ($movie->save()) {
            return new MoviesResource($movie);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get a single Movie
        $movie = MoviesModel::findOrFail($id);

        //return single movies as resource
        return new MoviesResource($movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get a single Movie
        $movie = MoviesModel::findOrFail($id);

        if ($movie->delete()) {
            return new MoviesResource($movie);
        }
    }
}
