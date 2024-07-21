<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\train;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TrainController extends Controller
{
    // claim all the trains
    public function index(){
        $today = Carbon::today()->toDateString();

        // $trains = train::whereDate('Orario_di_partenza', $today)->get();
        $trains = train::all();

        return view('pages.welcome', compact('trains'));
    }
}
