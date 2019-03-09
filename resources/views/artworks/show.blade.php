@extends('layout')

@section('content')
    @section('banner')
    @endsection

    <h1 class="title">{{ $artwork->title }}</h1>
    <div class="content">{{ $artwork->artist }}</div>
    <div class="content">{{ $artwork->reference }}</div>
    <div class="content">{{ $artwork->dimensions }}</div>
    <div class="content">{{ $artwork->description }}</div>
    <div class="content">{{ $artwork->date }}</div>
    <div class="content">{{ $artwork->media }}</div>
    <div class="content">{{ $artwork->description }}</div>
    <p>
    <a class="btn btn-info" href="/artworks/{{ $artwork->id }}/edit">Edit</a>
    </p>

@endsection