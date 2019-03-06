@extends('layout')

@section('content')
    <div class="content">
        <div class="">
            Add an artwork
        </div>

        <form>

            <div>
                <input type="text" name="reference" placeholder="Artwork reference">
            </div>
            <div>
                <input type="text" name="artist" placeholder="Artwork artist">
            </div>
            <div>
                <input type="text" name="title" placeholder="Artwork title">
            </div>
            <div>
                <input type="text" name="media" placeholder="Artwork media">
            </div>
            <div>
                <input type="text" name="dimensions" placeholder="Artwork dimensions">
            </div>
            <div>
                <input type="text" name="date" placeholder="Artwork date">
            </div>
            <div>
                <input type="text" name="description" placeholder="Artwork description">
            </div>
            <div>
                <input type="text" name="notes" placeholder="Artwork notes">
            </div>
            <div>
                <button type="submit">Create artwork</button>
            </div>
        </form>
    </div>
@endsection