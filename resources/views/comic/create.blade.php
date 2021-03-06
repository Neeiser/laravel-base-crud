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

            @error('thumb')
                <div class="alert-error">{{ $message }}</div>
            @enderror

            <div class="comic-input">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title">
            </div>

            @error('title')
                <div class="alert-error">{{ $message }}</div>
            @enderror

            <div class="comic-input">
                <label for="description">Description:</label>
                <input type="text" id="description" name="description">
            </div>

            @error('description')
                <div class="alert-error">{{ $message }}</div>
            @enderror

            <div class="comic-input">
                <label for="type">Type:</label>
                <input type="text" id="type" name="type">
            </div>

            @error('type')
                <div class="alert-error">{{ $message }}</div>
            @enderror

            <div class="comic-input">
                <label for="price">Price:</label>
                <input type="text" id="price" name="price">
            </div>

            @error('price')
                <div class="alert-error">{{ $message }}</div>
            @enderror

            <div class="comic-input">
                <label for="series">Series:</label>
                <input type="text" id="series" name="series">
            </div>

            @error('series')
                <div class="alert-error">{{ $message }}</div>
            @enderror

            <div class="comic-input">
                <label for="sale_date">Sale Date:</label>
                <input type="text" id="sale_date" name="sale_date">
            </div>

            @error('sale_date')
                <div class="alert-error">{{ $message }}</div>
            @enderror

            <button type="submit">INVIA DATI AL DATABASE</button>
        </form>
    </div>


@endsection