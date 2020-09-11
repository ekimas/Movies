<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        if( auth()->attempt(request(['email','password'])) == false) 
        {
            return back()->withErrors([
                'message' => 'The email or password is uncorrect'
            ]);
        }

        $user_id = auth()->user()->id;

        setcookie("user_id", $user_id);

        return redirect()->to('/site');
    }

    public function destroy()
    {
        auth()->logout();
        unset($_COOKIE['user_id']);

        return redirect()->to('/');
    }
}
