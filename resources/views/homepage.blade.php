<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($movies as $movie)
        <div class="title">Title: {{$movie->title}}</div>
        <div class="original-title">Original Title: {{$movie->original_title}}</div>
        <div class="nationality">Nationality: {{$movie->nationality}}</div>
        <div class="date">Date: {{$movie->date}}</div>
        <div class="vote">Vote: {{$movie->vote}}</div>
        <hr>
    @endforeach
</body>
</html>