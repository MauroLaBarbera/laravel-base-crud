@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-5 text-center">OUR COMICS</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Cover</th>
                    <th>Title</th>
                    <th>Descriptions</th>
                    <th>Price</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->price }}$</td>
                        <td><a href="{{ route('comics.show', $comic->id) }}"
                            class="btn btn-success">Show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    <div class="pagination justify-content-center">
     {{ $comics->links()}}
    </div>

        {{-- <div class="col align-self-center">
            {{ $comics->links()}}
        </div> --}}
    </div>
@endsection