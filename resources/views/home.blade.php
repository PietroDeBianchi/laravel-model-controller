{{-- link this component to app.blade.php --}}
@extends('layouts.app')

{{-- chaghe the text of <title> of app.blade (not html elements) --}}
@section('title', 'Home')

{{-- chaghe the 'contents' of app.blade (also html elements) --}}
@section('contents')
    <div id="home-container" class="d-flex flex-wrap justify-content-between">
        @foreach ($movies as $movie)
        <div class="card mt-3">
            <div class="card-body p-1 text-center">
                <h5 class="card-title">{{$movie->title}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->nationality}}</h6>
                <span href="#" class="card-link">{{$movie->date}}</span>
                <div>
                    <span href="#" class="card-link">Rating from users : {{$movie->vote}}</span>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection