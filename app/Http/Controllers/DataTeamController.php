<?php

namespace App\Http\Controllers;

use App\Models\DataTeamModels;
use Illuminate\Http\Request;

class DataTeamController extends Controller
{
    public function ViewTeamctrl()
    {
        $DataTeam = DataTeamModels::all();
        return view('/before_login/about', compact('DataTeam'));
    }

    public function ViewTeamLoggedctrl()
    {
        $DataTeam = DataTeamModels::all();
        return view('/after_login/aboutlogged', compact('DataTeam'));
    }
}
