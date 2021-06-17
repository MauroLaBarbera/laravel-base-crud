@extends('layouts.main')

@section('content')
    <div class="container mt-5 vh-100">
       <h1 class="mb-5 text-center">{{ $comics->title }}</h1>
        <div class="row">
            <div class="col-md-2">
                <img class="img-fluids" src="{{ $comics->thumb}}" alt="{{ $comics->title }}">
            </div>
            <div class="col-md-8">
                 <p>{{ $comics->description }}</p>
            </div>
        </div>
        <h2>Price: {{ $comics->price}}€</h2>
       <a href="{{ route('comics.index') }}"> Back to Archive</a>
    </div>
@endsection