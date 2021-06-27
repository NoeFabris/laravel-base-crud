@extends('layout/default')

@section('title', 'Crud Create')

@section('main')

<form action="{{ route('comics.store')}}" method="post">
    @csrf

    <label for="title">Titolo</label>
    <input type="text" name='title' id='title'>

    <label for="price">Titolo</label>
    <input type="text" name='price' id='price'>

    <input type="submit" value='Invia'>

</form>

@endsection