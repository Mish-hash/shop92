@extends('layouts.app')

@section('content')

    <form action="/contacts" method="POST">
        @csrf
        <input type="text" name="name">
        <textarea name="message"></textarea>
        <button class="btn btn-primary">Send</button>
    </form>

@endsection