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
        <tr>

            <td>{{ $comic->id }}</td>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->price }}</td>
            <td>
                <a href="{{ route('comics.show', $comic->id) }}">Dettagli</a> - 
                <a href="{{ route('comics.edit', $comic->id) }}">Modifica</a> -
                <form action="{{ route('comics.destroy', $comic->id) }}" method="post" Class='delete_form'>
                
                    @csrf
                    @method('DELETE')
                    <input type="submit" value='Elimina'>
                
                </form>
                {{-- <a href="{{ route('comics.delete', $comic->id) }}">Elimina</a> --}}
            </td>
            
        </tr>
        @endforeach

    </tbody>

</table>

@endsection