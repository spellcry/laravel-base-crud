@extends('layouts.app')

@section('metaTitle', 'Aggiungi un fumetto')

@section('content')
    <div class="container">
        <h2 class="comics-create">Aggiungi un fumetto</h2>
        <form method="POST" action="{{ route('comics.store') }}">
            @csrf
            <p>
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title">
            </p>            
            <p>
                <label for="thumb">Immagine (url)</label>
                <input type="text" name="thumb" id="thumb">
            </p>
            <p>
                <label for="price">Prezzo</label>
                <input type="text" name="price" id="price">
            </p>
            <p>
                <label for="series">Serie</label>
                <input type="text" name="series" id="series">
            </p>
            <p>
                <label for="sale-date">Data di Vendita</label>
                <input type="text" name="sale_date" id="sale-date">
            </p>
            <p>
                <label for="type">Tipo</label>
                <input type="text" name="type" id="type">
            </p>
            <p>
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Aggiungi una descrizione"></textarea>
            </p>
            <input type="submit" value="Salva">
        </form>
    </div>
@endsection