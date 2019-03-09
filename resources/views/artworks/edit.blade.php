@extends('layout')

@section('content')

    <div class="content">
        <h1>Edit artwork</h1>
        <div class="">
            Edit artwork
        </div>
        <form method="POST" action="/artworks/{{ $artwork->id }}">

            @csrf
            @method('PATCH')

            <div>
                <input type="text" name="reference" placeholder="reference" value="{{ $artwork->reference}}">
            </div>

            <div>
                <input type="text" name="artist" placeholder="artist" value="{{ $artwork->artist }}">
            </div>

            <div>
                <input type="text" name="title" placeholder="title" value="{{ $artwork->title }}">
            </div>

            <div>
                <input type="text" name="media" placeholder="media" value="{{ $artwork->media }}">
            </div>

            <div>
                <input type="text" name="dimensions" placeholder="dimensions" value="{{ $artwork->dimensions }}">
            </div>

            <div>
                <input type="text" name="date" placeholder="date" value="{{ $artwork->date }}">
            </div>

            <div>
                <input type="text" name="description" placeholder="description" value="{{ $artwork->description }}">
            </div>

            <div>
                <input type="text" name="notes" placeholder="notes" value="{{ $artwork->notes }}">
            </div>

            <br/>
            <div>
                <button class="btn btn-sm btn-outline btn-info" type="submit">Update artwork</button>
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

        <form method="POST" action="/artworks/{{ $artwork->id }}">
            @csrf
            @method('DELETE')
            <div>
                <button class="btn btn-sm btn-outline btn-danger">Delete</button>
            </div>
        </form>
    </div>
@endsection