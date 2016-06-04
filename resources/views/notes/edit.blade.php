@extends('layout');

@section('content');
    <h1>Edit Note</h1>

    <form method="POST" action="">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <textarea name="body"> {{ $note->body }}</textarea>
        <button type="submit">update Note</button>
    </form>
@stop