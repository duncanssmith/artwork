@extends('layout')

@section('content')
    @section('banner')

    @endsection

    <div class="content">
        <h2>Artworks</h2>

        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Ref</th>
                    <th>Title</th>
                    <th>Artist</th>
                    <th>Medium</th>
                    <th>Date</th>
                    <th>Dimensions</th>
                    <th>Description</th>
                    <th>Notes</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artworks as $artwork)
                    <tr>
                        <td>image</td>
                        <td><a href="/artworks/{{ $artwork->id }}">{{ $artwork->reference }}</a></td>
                        <td>{{ $artwork->title }}</td>
                        <td>{{ $artwork->artist }}</td>
                        <td>{{ $artwork->medium }}</td>
                        <td>{{ $artwork->date }}</td>
                        <td>{{ $artwork->dimensions}}</td>
                        <td>{{ $artwork->description}}</td>
                        <td>{{ $artwork->notes }}</td>
                        <td><a href="/artworks/{{ $artwork->id }}">Show</a></td>
                        <td><a href="/artworks/{{ $artwork->id }}/edit">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection