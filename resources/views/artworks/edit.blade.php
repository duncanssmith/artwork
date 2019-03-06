@extends('layout')

@section('content')

    <div class="content">
        <h1>Edit artwork</h1>
        <div class="">
            Edit artwork
        </div>
        <form method="POST" action="/artworks">

            {{ method_field('PATCH') }}
            {{ csrf_field() }}

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

            <div>
                <button type="submit">Update artwork</button>
                <a class = "btn btn-danger" href="/delete">Delete</>
            </div>

        </form>
    </div>
@endsection