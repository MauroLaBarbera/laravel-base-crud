@extends('layouts.main')

@section('content')
    <div class="container">
       <h1>{{ $comics->title }}</h1>
        
       <a href="{{ route('comics.index') }}"> Back to Archive</a>
    </div>
@endsection