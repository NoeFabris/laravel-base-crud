@extends('layout/default')

@section('title', 'Crud Show')

@section('main')

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