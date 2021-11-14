<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $weeks = DB::select('SELECT * FROM Weeks');
        return view('home');
    }

    public function weeklyguide()
    {
        $weeks = DB::select('SELECT * FROM Weeks');
        return view("home.weeklyguide", ['weeks' => $weeks]);
    }
}
