<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="comics-container">
        @foreach ($comics as $comic)
            <a href="{{ route("ShowComic", $comic->id) }}">
                <div class="comic-box">
                    <img src="{{$comic->thumb}}" alt="">
                    <p>{{$comic->title}}</p>
                </div>
            </a>
        @endforeach
    </div>
</body>
</html>