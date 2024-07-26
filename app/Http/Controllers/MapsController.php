<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function index()
    {
        $cctvUrl = 'http://cctv.malangkota.go.id/';
        return view('maps.index', compact('cctvUrl'));
    }
}