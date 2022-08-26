<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{-- Heading --}}
    <h1>I Film più premiati</h1>
    
    <div class="container">
        
        {{-- Movie List --}}
        @for ($i = 0; $i < count($movies); $i++)
            {{-- Card --}}
            <div class="card">
                <img src="{{ $posters[$i]['url'] }}" alt="">

                <div>
                    <h2 class="title">{{$movies[$i]->title}}</h2>
                    <h3 class="original-title">({{$movies[$i]->original_title}})</h3>
                    <div class="nationality"><span>Nazionalità: </span>{{$movies[$i]->nationality}}</div>
                    <div class="date"><span>Data: </span>{{$movies[$i]->date}}</div>
                    <div class="vote"><span>Voto: </span>{{$movies[$i]->vote}}</div>
                </div>
            </div>
        @endfor
    </div>
</body>
</html>