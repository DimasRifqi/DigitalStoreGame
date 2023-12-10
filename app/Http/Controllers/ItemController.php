<?php

namespace App\Http\Controllers;

use App\Models\type_game;
use Illuminate\Http\Request;
use App\Models\type_game_game;
class ItemController extends Controller
{
    // dalam ItemController.php


public function index()
{
    $data = type_game::all();
    return response()->json($data);
}

}
