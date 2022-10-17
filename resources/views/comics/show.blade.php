@extends('layouts.app')

@section('metaTitle', $comic->title)

@section('content')
    <h2 class="comic-title">{{ $comic->title }}</h2>
    <img src="{{ $comic->thumb }}" class="thumb">
    <ul class="comic-info__list">
        <li class="list-item description">
            <span>Descrizione: </span>
            {{ $comic->description }}
        </li>
        <li class="list-item price">
            <span>Prezzo: </span>
            {{ $comic->price }}
        </li>
        <li class="list-item series">
            <span>Serie: </span>
            {{ $comic->series }}
        </li>
        <li class="list-item sale_date">
            <span>Data di vendita: </span>
            {{ $comic->sale_date }}
        </li>
        <li class="list-item type">
            <span>Tipo: </span>
            {{ $comic->type }} 
        </li>
    </ul>
    <div class="options">
        <a href="{{ route('comics.edit', $comic) }}">Modifica</a>
        <form action="{{ route('comics.destroy', $comic) }}" method="POST">
            @method('DELETE')
            @csrf
            <input type="submit" value="Elimina">
        </form>
    </div>
@endsection