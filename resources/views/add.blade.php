@include('header')
@extends('master')
@section('title', 'Home')

@section('navbar')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3 class="p-2 bg-warning text-dark mt-5 rounded-3">Game Add</h3>
            <table class="table">
                <form action="{{route('addlogic')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <input type="number" placeholder="Game Number" name="game_id">
                    </div>
                    <div>
                        <input type="text" placeholder="Game Name" name="game_name">
                    </div>
                    <div>
                        <input type="text" placeholder="Game Genre" name="game_genre">
                    </div>
                    <div>
                        <input type="text" placeholder="Game Price" name="game_price">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Save</button>
                    </div>
                </form>
            </table>
        </div>
    </div>
</div>

@endsection

@section('footer')
