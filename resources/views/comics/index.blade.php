@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>OUR COMICS</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Title</th>
                    <th>Descriptions</th>
                    <th>Price</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td><img src="{{ $comic->thumb }}" alt=""></td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->price }}$</td>
                        <td>Show</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection