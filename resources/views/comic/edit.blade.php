@extends('template.base')

@section('pageTitle')

@section('pageMain')

    <div class="container-form">
        @if ($errors->any())
            <div class="alert-box">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('comic.update', $comic->id )}}">

            @csrf
            @method('PUT') {{-- CAMBIO IL METODO CON BLADE --}}

            <div class="comic-input">
                <label for="thumb">Thumb:</label>
                <input type="text" id="thumb" name="thumb" value="{{ $comic->thumb}}">
            </div>
            <div class="comic-input">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="{{ $comic->title }}">
            </div>
            <div class="comic-input">
                <label for="description">Description:</label>
                <input type="text" id="description" name="description" value="{{ $comic->description }}">
            </div>
            <div class="comic-input">
                <label for="type">Type:</label>
                <input type="text" id="type" name="type" value="{{ $comic->type }}">
            </div>
            <div class="comic-input">
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" value="{{ $comic->price }}">
            </div>
            <div class="comic-input">
                <label for="series">Series:</label>
                <input type="text" id="series" name="series" value="{{ $comic->series }}">
            </div>
            <div class="comic-input">
                <label for="sale_date">Sale Date:</label>
                <input type="text" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
            <button type="submit">INVIA DATI AL DATABASE</button>
        </form>
    </div>

@endsection