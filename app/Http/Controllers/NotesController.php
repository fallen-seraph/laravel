<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NotesController extends Controller
{
    public function addNote(Request $request){
        return $request->all();
    }
}
