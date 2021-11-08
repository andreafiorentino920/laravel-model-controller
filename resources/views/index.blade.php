<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Prova</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
            @foreach ($movies as $movie)
                <div class="card">
                    <h1>Titolo: {{$movie['title']}}</h1>
                    <h2>Titolo Originale: {{$movie['original_title']}}</h2>
                    <h4>Nazionalità: {{$movie['nationality']}}</>
                    <h4>Data di uscita: {{$movie['date']}}</h4>
                    <h4>Voto della critica: {{$movie['vote']}}</h4>
                </div>
            @endforeach
        </ul>
    </div>
</body>
</html>