<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NotesController extends Controller
{
    public function store(Request $request)
    {
        $note = new Note;

        $note->note = $request->note;
        $note->comment = $request->comment;
        $note->movie_id = $request->movie_id;
        $note->user_id = $_COOKIE['user_id'];

        $note->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $note = Note::find($id);

        $note->delete();

        return redirect()->back();
    }
}
