<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Ships;
Use App\Models\Crewmates;
Use App\Models\Crew;
Use App\Models\Ranks;


class AgencyController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function assignPage()
    {
        $crewmates=Crewmate::all();
        return view('assign', compact($crewmates));
    }

    public function viewPage()
    {
        $ships=Ships::all();
        return view('view', compact($ships));
    }
}
