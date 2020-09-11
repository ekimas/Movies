<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Director;
use App\Movie;
use App\User;
use App\Note;

class FilmsController extends Controller
{
    public function create()
    {
        $directors = Director::all();
        return view('films.create')->with('directors', $directors);
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required',
            'director' => 'required'
        ]);

        $title = $request->input('title');
        
        $alt = $title." poster";
        
        $director_id = $request->input('director');

        $user_id = $request->input('user_id');

        
        DB::table('movies')->insert(['title' => $title, 'alt' => $alt, 'director_id' => $director_id, 'user_id' => $user_id]);

        return redirect('/site');
    }

    public function delete($id)
    {
        $movie = Movie::find($id);

        $movie->delete();

        return redirect()->back();
    }

    public function update($id)
    {
        $movie = Movie::find($id);
        $directors = Director::all();

        return view('films.update')->with('movie', $movie)->with('directors', $directors);
    }

    public function getAllUserFilms()
    {
        $userMovies = DB::table('movies')
                            ->join('directors','movies.director_id', '=', 'directors.id')
                            ->select('movies.*','directors.name')
                            ->where('user_id', '=', $_COOKIE['user_id'])
                            ->get();

        //dd($userMovies);

        return view('films.userFilms')->with('userMovies', $userMovies);
    }

    public function save(Request $request, $id)
    {
        $movie = Movie::find($id);

        //dd($request->all());

        $movie->title = $request->title;
        $movie->alt = $request->title.' poster';
        $movie->director_id = $request->director;

        $movie->save();

        return redirect()->route('user_films');
    }

    public function getAllFilms()
    {
        $movies = DB::table('movies')
                        ->join('directors','movies.director_id', '=', 'directors.id')
                        ->select('movies.*','directors.name')
                        ->get();

        return view('films.allFilms')->with('movies', $movies);
    }

    public function filmInfo($id)
    {
        $movie = DB::table('movies')
                        ->join('directors','movies.director_id', '=', 'directors.id')
                        ->select('movies.*','directors.name')
                        ->where('movies.id', '=', $id)
                        ->get();
        
        $comments = DB::table('notes')
                        ->join('users','users.id','=','notes.user_id')
                        ->join('movies','movies.id','=','notes.movie_id')
                        ->select('notes.*','users.name', 'users.id')
                        ->where('notes.movie_id','=',$id)
                        ->get();

        $avg = DB::table('notes')
                        ->where('movie_id', '=', $id)
                        ->avg('note');

        $comment_exists = DB::table('notes')
                        ->where('movie_id', '=', $id)
                        ->where('user_id', '=', $_COOKIE['user_id'])
                        ->count();
        if($comment_exists>0)
            $com_access = false;
        else
            $com_access = true;

        return view('films.film')->with('movie', $movie)->with('comments', $comments)->with('avg', $avg)->with('com_access', $com_access);
    }
}
