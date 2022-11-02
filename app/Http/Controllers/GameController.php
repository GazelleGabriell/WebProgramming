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
}
