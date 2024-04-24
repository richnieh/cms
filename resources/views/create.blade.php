@extends('layouts.app')

@section('content')
    <form method="post", action="/posts">
        <input type="text" placeholder="Insert title" name="title">
        <input type="submit" name="submit">
        @csrf
    </form>
@endsection
