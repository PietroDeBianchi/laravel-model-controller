{{-- link this component to app.blade.php --}}
@extends('layouts.app')

{{-- chaghe the text of <title> of app.blade (not html elements) --}}
@section('title', 'Series')

{{-- chaghe the 'contents' of app.blade (also html elements) --}}
@section('contents')
    <div id="series-container">
        <h3>Series are coming!</h3>
    </div>
@endsection