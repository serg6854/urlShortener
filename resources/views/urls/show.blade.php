@extends('app')

@section('content')
    <h3>Your shortener version of {{ $url->url }} is: <span><a href="{{ $url->shorten }}">Link</a></span></h3>
@endsection
