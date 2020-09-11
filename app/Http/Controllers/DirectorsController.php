<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Director;

class DirectorsController extends Controller
{
    public function create()
    {
        return view('directors.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required',
        ]);
        
        $director = new Director;

        $director->name = $request->name;

        $director->save();

        return redirect('/add_film');
    }
}
