<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>films</h1>
        <div class="container">
            <div class="card">
                @foreach ($movies as $movie)
                    <p>{{ $movie['title']}}</p>
                @endforeach
            </div>
        </div>
    </body>
</html>
