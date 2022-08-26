<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>i miei libri</h1>

    </div>
    @foreach ($movies as $movie)
        <div class="card-movie" >
            <div class="title" > Titolo: <strong> {{ $movie['title'] }} </strong></div>
            <div class="original-title" >Titolo Originale: <strong>{{ $movie['original_title'] }}</strong></div>
            <div class="nationality">Nazionalità: <strong>{{ $movie['nationality'] }}</strong></div>
            <div class="date">Data di produzione: <strong>{{ $movie['date'] }}</strong></div>
                
        </div>
        <br>
        
    @endforeach
    
</body>
</html>