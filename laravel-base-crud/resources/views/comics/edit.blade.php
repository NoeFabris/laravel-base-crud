@extends('layout/default')

@section('title', 'Crud Edit')

@section('main')

<a href="{{ route('comics.index') }}">Torna all'elenco completo</a>

@if(count($errors->all()) > 0)
    
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>

@endif

<form action="{{ route('comics.update', $comic->id)}}" method="post">
    @csrf

    @method('PUT')

    <label for="title">Titolo</label>
    <input type="text" name='title' id='title' value='{{ $comic->title }}'>

    <label for="price">Prezzo</label>
    <input type="text" name='price' id='price' value='{{ $comic->price }}'>

    <label for="thumb">Cover</label>
    <input type="text" name='thumb' id='thumb' value='{{ $comic->thumb }}'>

    <label for="description">Descrizione</label>
    <input type="text" name='description' id='description' value='{{ $comic->description }}'>

    <label for="series">Serie</label>
    <input type="text" name='series' id='series' value='{{ $comic->series }}'>

    <label for="sale_date">Data Di vendita</label>
    <input type="text" name='sale_date' id='sale_date' value='{{ $comic->sale_date }}'>

    <label for="type">Tipo</label>
    <input type="text" name='type' id='type' value='{{ $comic->type }}'>

    <input type="submit" value='Invia Modifiche'>

</form>

@endsection