<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Ship;
Use App\Models\Crewmate;
Use App\Models\Crew;
Use App\Models\Rank;


class AgencyController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function assignPage()
    {
        $crewmates=Crewmate::all();
        $ranks=Rank::all();
        $ships=Ship::all();
        return view('assign', compact('crewmates', 'ranks', 'ships'));
    }

    public function startAssign(Request $request)
    {
        $crewmates=Crewmate::all();
        $ranks=Rank::all();
        $ships=Ship::all();


        
        return view('welcome', compact('crewmates', 'ranks', 'ships'));
    }

    public function viewPage()
    {
        $ships=Ship::all();
        return view('view', compact('ships'));
    }
}
