@extends('layout')

@section('content')
    <div class="content">
        <div class="">
            Add an artwork
        </div>
        <form method="POST" action="/artworks">

            {{ csrf_field() }}

            <div>
                <input type="text" name="reference" placeholder="reference">
            </div>

            <div>
                <input type="text" name="artist" placeholder="artist">
            </div>

            <div>
                <input type="text" name="title" placeholder="title">
            </div>

            <div>
                <input type="text" name="media" placeholder="media">
            </div>

            <div>
                <input type="text" name="dimensions" placeholder="dimensions">
            </div>

            <div>
                <input type="text" name="date" placeholder="date">
            </div>

            <div>
                <input type="text" name="description" placeholder="description">
            </div>

            <div>
                <input type="text" name="notes" placeholder="notes">
            </div>

            <div>
                <button type="submit">Create artwork</button>
            </div>

        </form>
    </div>
@endsection