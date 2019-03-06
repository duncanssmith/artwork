@extends('layout')

@section('content')

    <h1>Edit artwork</h1>
    <div class="">
         Edit artwork
    </div>
        <form method="POST" action="/artworks">

            {{ csrf_field() }}

            <div>
            <input type="text" name="reference" placeholder="Artwork reference" value="{{ $artwork->reference}}">
            </div>

            <div>
                <input type="text" name="artist" placeholder="Artwork artist" value="{{ $artwork->artist }}">
            </div>

            <div>
            <input type="text" name="title" placeholder="Artwork title" value="{{ $artwork->title }}">
            </div>

            <div>
                <input type="text" name="media" placeholder="Artwork media" value="{{ $artwork->media }}">
            </div>

            <div>
                <input type="text" name="dimensions" placeholder="Artwork dimensions" value="{{ $artwork->dimensions }}">
            </div>

            <div>
                <input type="text" name="date" placeholder="Artwork date" value="{{ $artwork->date }}">
            </div>

            <div>
                <input type="text" name="description" placeholder="Artwork description" value="{{ $artwork->description }}">
            </div>

            <div>
                <input type="text" name="notes" placeholder="Artwork notes" value="{{ $artwork->notes }}">
            </div>

            <div>
                <button type="submit">Update artwork</button>
            </div>

        </form>
@endsection