@extends('layout')

@section('content')
        <h1>
            {{ $card->title }}
        </h1>

        <ul>
            @foreach ($card->notes as $note)
                <li>
                    <a href="/cards/{{ $card->id }}">{{ $note->body }}</a>
                </li>
            @endforeach
        </ul>
@stop