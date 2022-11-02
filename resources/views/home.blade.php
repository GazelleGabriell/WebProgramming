@include('header')
@extends('master')
@section('title', 'Home')

@section('navbar')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3 class="p-2 bg-warning text-dark mt-5 rounded-3">Game List</h3>
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Game</th>
                    <th scope="col">Name Game</th>
                    <th scope="col">Genre Game</th>
                    <th scope="col">Price Game</th>
                </tr>
            </thead>
            <tbody class="bg-light">
                    <tr>
                    @foreach($gamelist as $game)
                            <td>{{ $game->id_game }}</td>
                            <td>{{ $game->nama_game }}</td>
                            <td>{{ $game->genre_game }}</td>
                            <td>{{ $game->price_game }}</td>
                    </tr>
                    @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('footer')

