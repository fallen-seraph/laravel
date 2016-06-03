<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Note;
use App\Http\Requests;

class NotesController extends Controller
{
    public function addNote(Request $request, Card $card){
        $note = new Note;
        $note->body = $request->body;
        $card->notes()->save($note);
        return back();
    }
}
