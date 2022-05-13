@extends('template.base')

@section('pageTitle')

@section('pageMain')

    <div class="comics-container">
        @foreach ($comics as $comic)
            <a href="{{ route("comic.show", $comic->id) }}">
                <div class="comic-box">
                    <img src="{{$comic->thumb}}" alt="">
                    <p>{{$comic->title}}</p>          
                </div>
            </a>
        @endforeach
    </div>
    
@endsection
