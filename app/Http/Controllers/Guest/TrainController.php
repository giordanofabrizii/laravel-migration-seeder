<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    // claim all the trains
    public function index(){
        $trains = train::all();

        return view('pages.welcome', compact('trains'));
    }
}
