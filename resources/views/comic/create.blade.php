@extends('template.base')

@section('pageTitle')

@section('pageMain')

    <div class="container-form">
        <form method="POST" action="{{ route('comic.store')}}">
            @csrf
            <div class="comic-input">
                <label for="thumb">Thumb:</label>
                <input type="text" id="thumb" name="thumb">
            </div>
            <div class="comic-input">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title">
            </div>
            <div class="comic-input">
                <label for="description">Description:</label>
                <input type="text" id="description" name="description">
            </div>
            <div class="comic-input">
                <label for="type">Type:</label>
                <input type="text" id="type" name="type">
            </div>
            <div class="comic-input">
                <label for="price">Price:</label>
                <input type="text" id="price" name="price">
            </div>
            <div class="comic-input">
                <label for="series">Series:</label>
                <input type="text" id="series" name="series">
            </div>
            <div class="comic-input">
                <label for="sale_date">Sale Date:</label>
                <input type="text" id="sale_date" name="sale_date">
            </div>
            <button type="submit">INVIA DATI AL DATABASE</button>
        </form>
    </div>

@endsection