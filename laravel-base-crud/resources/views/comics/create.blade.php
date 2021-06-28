@extends('layout/default')

@section('title', 'Crud Create')

@section('main')

<a href="{{ route('comics.index') }}">Torna all'elenco completo</a>

@if(count($errors->all()) > 0)
    
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>

@endif

<form action="{{ route('comics.store')}}" method="post">
    @csrf

    <label for="title">Titolo</label>
    <input type="text" name='title' id='title' placeholder='obbligatorio'>

    <label for="price">Prezzo</label>
    <input type="text" name='price' id='price' placeholder='obbligatorio'>

    <label for="thumb">Cover</label>
    <input type="text" name='thumb' id='thumb'>

    <label for="description">Descrizione</label>
    <input type="text" name='description' id='description'>

    <label for="series">Serie</label>
    <input type="text" name='series' id='series'>

    <label for="sale_date">Data Di vendita</label>
    <input type="text" name='sale_date' id='sale_date'>

    <label for="type">Tipo</label>
    <input type="text" name='type' id='type'>

    <input type="submit" value='Invia'>

</form>

@endsection