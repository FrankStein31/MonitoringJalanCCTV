<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $rambuCount = DB::table('rambu')->count();
        $tlightCount = DB::table('tlight')->count();
        $trafficCount = DB::table('traffic')->count();

        return view('home', compact('rambuCount', 'tlightCount', 'trafficCount'));
    }
}