@extends('layout')

@section('content')
        <h1>
            {{ $card->title }}
        </h1>

        <ul>
            @foreach ($card->notes as $note)
                <li>
                    {{ $note->body }}
                    <a href="#">{{ $note->user->username }}</a> |
                    <a href="/notes/{{ $note->id }}/edit">edit</a>
                </li>
            @endforeach
        </ul>

        <h3>
            Add a New Note
        </h3>

        <form method="POST" action="/cards/{{ $card->id }}/notes">
            {{ csrf_field() }}
            <textarea name="body"></textarea>
            <button type="submit">Add Note</button>
        </form>
        @if (count($errors))
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
@stop