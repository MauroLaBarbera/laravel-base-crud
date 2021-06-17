@extends('layouts.main')

@section('content')
    <div class="container mt-5 vh-100">
       <h1 class="mb-5 text-center">{{ $comic->title }}</h1>
        <div class="row">
            <div class="col-md-2">
                <img class="img-fluids" src="{{ $comic->thumb}}" alt="{{ $comic->title }}">
                <h5 class="btn btn-primary mt-2">Series: {{ $comic->series}}</h5>
                <h5 class="btn btn-warning">Sale Date: {{ $comic->sale_date}}</h5>
            </div>
            <div class="col-md-8">
                 <p>{{ $comic->description }}</p>
            </div>
        </div>
        <h2>Price: {{ $comic->price}}$</h2>
       <a href="{{ route('comics.index') }}"> Back to Archive</a>
    </div>
@endsection