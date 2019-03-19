@extends('layout')

@section('content')
    <div class="content">
        <div class="">
            <h1 class="title">
            Artists create </h1>
        </div>
        <form method="POST" action="/artists">

            @csrf

            <div>
                <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
            </div>

            <div>
                <button type="submit">Create artist</button>
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