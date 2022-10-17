@extends('layouts.app')

@section('metaTitle', $comic->title)

@section('content')
    @include('partials.hero')
    <div class="comic">
        <div class="container">
            <div class="description">
                <div class="row">
                    <div class="col-70">
                        <h2 class="title">{{ $comic['title'] }}</h2>
                        <div class="status">
                            <div class="price">
                                U.S. Price: <span class="accent">{{ $comic['price'] }}</span>
                            </div>
                            <div class="availability">
                                Available                    
                            </div>
                            <div class="check-availability">
                                <span class="accent">Check Availability</span>
                            </div>
                        </div>
                        <div class="description_text">
                            <p>
                                {{ $comic['description'] }}
                            </p>
                        </div>
                    </div>
                    <div class="col-30">
                        <p class="intro">Advertisement</p>
                        <img class="adv" src="{{ asset('img/adv.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            {{-- <h2 class="comic-title">{{ $comic->title }}</h2>
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
            </ul> --}}
            <div class="info">
                <div class="container">
                    <div class="row">                        
                        <h3 class="title">Specs</h3>
                        <div class="col-50">
                            <ul class="list">
                                <li class="list-item">
                                    <div class="description">
                                        Series:
                                    </div>
                                    <div class="content series">
                                        <?= $comic['series'] ?>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <div class="description">
                                        U.S. Price:
                                    </div>
                                    <div class="content price">
                                        <?= $comic['price'] ?>
                                    </div>
                                </li>                                
                            </ul>
                        </div>
                        <div class="col-50">
                            <ul class="list">                                
                                <li class="list-item">
                                    <div class="description">
                                        On Sale Date:
                                    </div>
                                    <div class="content sale_date">
                                        <?= $comic['sale_date'] ?>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <div class="description">
                                        Type:
                                    </div>
                                    <div class="content type">
                                        <?= $comic['type'] ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="options col-100">
                            <a href="{{ route('comics.edit', $comic) }}" class="cta">Modifica</a>
                            <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Elimina" class="cta remove">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection