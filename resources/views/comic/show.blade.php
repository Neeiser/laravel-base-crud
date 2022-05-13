@extends('template.base')

@section('pageTitle')

@section('pageMain')

    <div class="comics-container-single">
        <div class="comic-box-single">
            <div class="img-comic">
                <img src="{{$comic->thumb}}" alt="">
            </div>
            <p>TITLE: {{$comic->title}}</p>
            <p>DESC: {{$comic->description}}</p>
            <p>TYPE: {{$comic->type}}</p>
            <p>PRICE: {{$comic->price}} $</p>
            <p>SERIES: {{$comic->series}}</p>
            <p>DATE: {{$comic->sale_date}}</p>
            <form action="{{ route('comic.edit', $comic->id)}}">
                <button>MODIFICA</button>
            </form>
            <form action="{{ route('comic.destroy', $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button>CANCELLA</button>
            </form>
        </div>
    </div>

@endsection