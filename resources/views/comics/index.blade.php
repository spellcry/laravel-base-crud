@extends('layouts.app')

@section('metaTitle', 'DC Comics Home')

@section('content')
    @include('partials.hero')
    <div class="container">
        @include('partials.cards')
        <div class="options">
            <a class="cta load-more">
                Load more
            </a>
            <a class="cta add" href="{{ route('comics.create') }}">
                Aggiungi fumetto
            </a>
        </div>
    </div>
    {{-- <section class="comics-list">
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
    </section> --}}
@endsection