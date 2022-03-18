<?php

namespace App\Http\Controllers;

use App\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();

        return view('home', compact('trains'));
    }
}
