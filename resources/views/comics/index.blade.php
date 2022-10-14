@extends('layouts.app')

@section('metaTitle', 'Comics')

@section('content')
    <div class="container">
        <ul class="comics-list">
            @foreach ($comics as $comic)
                <li class="list-item">
                    <img src="{{ $comic->thumb }}" class="thumb">
                    <p class="title">
                        <span>Titolo: </span>
                        {{ $comic->title }}
                    </p>
                    <p class="description">
                        <span>Descrizione: </span>
                        {{ $comic->description }}
                    </p>
                    <p class="price">
                        <span>Prezzo: </span>
                        {{ $comic->price }}
                    </p>
                    <p class="series">
                        <span>Serie: </span>
                        {{ $comic->series }}
                    </p>
                    <p class="sale_date">
                        <span>Data di vendita: </span>
                        {{ $comic->sale_date }}
                    </p>
                    <p class="type">
                        <span>Tipo: </span>
                        {{ $comic->type }}
                    </p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection