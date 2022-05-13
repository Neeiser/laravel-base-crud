@extends('template.base')

@section('pageTitle')

@section('pageMain')

    <div class="comics-container">
        @foreach ($comics as $comic)
            <a href="{{ route("comic.show", $comic->id) }}">
                <div class="comic-box">
                    <img src="{{$comic->thumb}}" alt="">
                    <p>{{$comic->title}}</p>
                    <form action="{{ route('comic.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>CANCELLA</button>
                    </form>
                </div>
            </a>
        @endforeach
    </div>
    
@endsection
