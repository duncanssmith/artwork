@extends('layout')

@section('content')

    <div class="content">
        <h1>Edit artist</h1>
        <div class="">
            Edit artist
        </div>
        <form method="POST" action="/artists/{{ $artist->id }}">

            @csrf
            @method('PATCH')

            <div>
                <input type="text" name="name" placeholder="name" value="{{ $artist->name}}">
            </div>

            <div>
                <input type="text" name="dob" placeholder="dob" value="{{ $artist->dob }}">
            </div>

            <div>
                <input type="text" name="nationality" placeholder="nationality" value="{{ $artist->nationality }}">
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif


        </form>

        <form method="POST" action="/artist/{{ $artist->id }}">
            @csrf
            @method('DELETE')
            <div>
                <button class="btn btn-sm btn-outline btn-danger">Delete</button>
            </div>
        </form>
    </div>
@endsection