<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Note;
use App\Http\Requests;

class NotesController extends Controller
{
    public function store(Request $request, Card $card){
//        $note = new Note;
//        $note->body = $request->body;
//        $card->notes()->save($note);

//        $card->notes()->create([
//            'body' => $request->body
//        ]);

        $note = new Note($request->all());
        $card->addNote($note, 1);

        return back();
    }

    public function edit(Note $note){
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note){
        $note->update([
            'body' => $request->body
        ]);
        return back();
    }
}
