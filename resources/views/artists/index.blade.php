@extends('layout')

@section('content')
    @section('banner')

    @endsection

    <div class="content">
        <h1 class="title">Artist</h1>

        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artists as $artist)
                    <tr>
                        <td>image</td>
                        <td><a href="/artists/{{ $artist->id }}">{{ $artist->name }}</a></td>
                        <td>{{ $artist->dob }}</td>
                        <td><a href="/artists/{{ $artist->id }}">Show</a></td>
                        <td><a href="/artists/{{ $artist->id }}/edit">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection