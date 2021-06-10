<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Films</h1>
        <div class="container">
            @foreach ($movies as $movie)
            <div class="card">
                <h2>{{ $movie['title']}}</h2>
                <p>{{ $movie['original_title']}}</p>
                <p>{{ $movie['nationality']}}</p>
                <p>{{ $movie['date']}}</p>
                <p>{{ $movie['vote']}}</p>
            </div>
            @endforeach
        </div>
    </body>
</html>
