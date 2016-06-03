@extends('layout')

@section('content')
        <h1>
            {{ $card->title }}
        </h1>

        <ul>
            @foreach ($card->notes as $note)
                <li>
                    {{ $note->body }}
                </li>
            @endforeach
        </ul>

        <h3>
            Add a New Note
        </h3>

        <form method="POST" action="/cards/{{ $card->id }}/notes">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <textarea name="body"></textarea>
            <button type="submit">Add Note</button>
        </form>
@stop