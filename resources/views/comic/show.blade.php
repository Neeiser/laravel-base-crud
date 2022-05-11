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
        </div>
    </div>

@endsection