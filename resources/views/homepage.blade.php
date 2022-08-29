@extends('layouts.app')

@section('page_title')
    Homepage
@endsection

@section('main_content')
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
@endsection