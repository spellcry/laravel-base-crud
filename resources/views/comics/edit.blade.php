@extends('layouts.app')

@section('metaTitle', 'Modifica fumetto')

@section('content')
    <div class="container">
        <h2 class="comics-create">Modifica fumetto</h2>
        <form method="POST" action="{{ route('comics.update', $comic) }}">
            @csrf
            @method('PUT')
            <p class="@error('title') invalid @enderror">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" value="{{ old('title', $comic->title) }}">
                <div>
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>
            </p>            
            <p class="@error('thumb') invalid @enderror">
                <label for="thumb">Immagine (url)</label>
                <input type="text" name="thumb" id="thumb" value="{{ old('thumb', $comic->thumb) }}">
                <div>
                    @error('thumb')
                        {{ $message }}
                    @enderror
                </div>
            </p>
            <p class="@error('price') invalid @enderror">
                <label for="price">Prezzo</label>
                <input type="text" name="price" id="price" value="{{ old('price', $comic->price) }}">
                <div>
                    @error('price')
                        {{ $message }}
                    @enderror
                </div>
            </p>
            <p class="@error('series') invalid @enderror">
                <label for="series">Serie</label>
                <input type="text" name="series" id="series" value="{{ old('series', $comic->series) }}">
                <div>
                    @error('series')
                        {{ $message }}
                    @enderror
                </div>
            </p>
            <p class="@error('sale_date') invalid @enderror">
                <label for="sale-date">Data di Vendita</label>
                <input type="text" name="sale_date" id="sale-date" value="{{ old('sale_date', $comic->sale_date) }}">
                <div>
                    @error('sale_date')
                        {{ $message }}
                    @enderror
                </div>
            </p>
            <p class="@error('type') invalid @enderror">
                <label for="type">Tipo</label>
                <input type="text" name="type" id="type" value="{{ old('type', $comic->type) }}">
                <div>
                    @error('type')
                        {{ $message }}
                    @enderror
                </div>
            </p>
            <p class="@error('description') invalid @enderror">
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Aggiungi una descrizione">{{ old('description', $comic->description) }}</textarea>
                <div>
                    @error('description')
                        {{ $message }}
                    @enderror
                </div>
            </p>
            <input type="submit" value="Salva">
        </form>
    </div>
@endsection