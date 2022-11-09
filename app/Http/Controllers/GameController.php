<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function index()
    {
        $gamelist = DB::table('gamelist')->get();
        return view('home', compact('gamelist'));
    }

    public function addgame()
    {
        return view('add');
    }

    public function addgamelogic(Request $request)
    {
        DB::table('gamelist')->insert([
            "game_id" => $request->id_game,
            "game_name" => $request->nama_game,
            "game_genre" => $request->genre_game,
            "game_price" => $request->price_game
        ]);

        return redirect()->route('home');
    }
}
