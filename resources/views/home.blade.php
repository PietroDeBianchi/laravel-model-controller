{{-- link this component to app.blade.php --}}
@extends('layouts.app')

{{-- chaghe the text of <title> of app.blade (not html elements) --}}
@section('title', 'Home')

{{-- chaghe the 'contents' of app.blade (also html elements) --}}
@section('contents')
    <div id="home-container">
        <ul>
            @foreach ($movies as $movie)
                <li>{{$movie->title}}</li>
            @endforeach
        </ul>
    </div>
@endsection