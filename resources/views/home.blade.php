@extends('layouts.app')

@section('main')
    <div class="container row mx-auto mt-3 m-5 justify-content-center">
        @foreach ($movies as $movie)
        <div class="card col-3 m-4 p-0" >
            <img src="{{Vite::asset("resources/images/logo.png")}}" class="card-img-top">
            <div class="card-header text-white bg-primary" style="height: 60px">
                {{ $movie->title }}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $movie->original_title }}</li>
                <li class="list-group-item">{{ $movie->nationality }}</li>
                <li class="list-group-item">{{ $movie->date }}</li>
                <li class="list-group-item">{{ $movie->vote }}</li>
            </ul>
        </div>
        @endforeach
    </div>
@endsection