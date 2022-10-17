@extends('layouts.app')

@section('metaTitle', 'DC Comics Home')

@section('content')
    @include('partials.hero')
    <div class="container">
        <h1>Home Page</h1>
    </div>
@endsection

@section('sidebar')
    @include('partials.sidebar')
@endsection