@extends('layout')

@section('content')
    <h1>Edit Note</h1>

    <form method="POST" action="/notes/{{ $note->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <textarea name="body"> {{ $note->body }}</textarea>
        <button type="submit">update Note</button>
    </form>
@stop