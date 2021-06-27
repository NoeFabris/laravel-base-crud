@extends('layout/default')

@section('title', 'Crud Show')

@section('main')

<a href="{{ route('comics.index') }}">Torna all'elenco completo</a> - 
<a href="{{ route('comics.edit', $comic->id) }}">Modifica i dati</a> - 
<form action="{{ route('comics.destroy', $comic->id) }}" method="post" Class='delete_form'>
                
    @csrf
    @method('DELETE')
    <input type="submit" value='Elimina'>
                
</form>

<ul>

<li><img src="{{ $comic->thumb }}" alt=""></li>
<li>ID: {{ $comic->id }}</li>
<li>Title: {{ $comic->title }}</li>
<li>Description: {{ $comic->description }}</li>
<li>Price: {{ $comic->price }}</li>
<li>Series: {{ $comic->series }}</li>
<li>Sale Date: {{ $comic->sale_date }}</li>
<li>Type: {{ $comic->type }}</li>

</ul>


@endsection