@extends('layout')

@section('content')
    @section('banner')
    @endsection

    <h1 class="title">{{ $artist->name }}</h1>
    <div class="content">{{ $artist->dob }}</div>
    <p>
    <a class="btn btn-info" href="/artists/{{ $artist->id }}/edit">Edit</a>
    </p>

@endsection