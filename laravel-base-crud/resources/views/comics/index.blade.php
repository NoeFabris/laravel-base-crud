@extends('layout/default')

@section('title', 'Crud Index')

@section('main')

<a href="{{ route('comics.create') }}">Aggiungi Fumetto</a>

<table>

    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Price</th>
        </tr>
    </thead>

    <tbody>
    
        @foreach($comics as $comic)
            <td>{{ $comic->id }}</td>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->price }}</td>
            <td><a href="{{ route('comics.show', $comic->id) }}">Dettagli..</a></td>
        @endforeach

    </tbody>

</table>

@endsection