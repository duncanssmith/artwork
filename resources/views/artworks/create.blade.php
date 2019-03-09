@extends('layout')

@section('content')
    <div class="content">
        <div class="">
            <h1 class="title">
            Artwork create
            </h1>
        </div>
        <form method="POST" action="/artworks">

            @csrf

            <div>
                <input type="text" name="reference" placeholder="reference" value="{{ old('reference') }}">
            </div>

            <div>
                <input type="text" name="artist" placeholder="artist" value="{{old('artist')}}">
            </div>

            <div>
                <input type="text" name="title" placeholder="title" value="{{old('title')}}">
            </div>

            <div>
                <input type="text" name="media" placeholder="media" value="{{old('media')}}">
            </div>

            <div>
                <input type="text" name="dimensions" placeholder="dimensions" value="{{old('dimensions')}}">
            </div>

            <div>
                <input type="text" name="date" placeholder="date" value="{{old('date')}}">
            </div>

            <div>
                <input type="text" name="description" placeholder="description" value="{{old('description')}}">
            </div>

            <div>
                <input type="text" name="notes" placeholder="notes" value="{{old('notes')}}">
            </div>

            <div>
                <button type="submit">Create artwork</button>
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
    </div>
@endsection