@extends('layouts.app')

@section('metaTitle', 'Comics')

@section('content')
    <section class="new-comics">            
        <div class="container">
            <a href="{{ route('comics.create') }}">Aggiungi fumetto</a>
        </div>
    </section>
    <section class="comics-list">
        <div class="container">
            <ul class="comics-list">
                @foreach ($comics as $comic)
                    <li class="list-item">
                        <p class="title">
                            <a href="{{ route('comics.show', $comic) }}">
                                <img src="{{ $comic->thumb }}" class="thumb">
                                <span>Titolo: </span>
                                {{ $comic->title }}
                            </a>
                        </p>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection