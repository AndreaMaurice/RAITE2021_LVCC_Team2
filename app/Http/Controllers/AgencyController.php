<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Ships;
Use App\Models\Crewmates;
Use App\Models\Crew;


class AgencyController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
