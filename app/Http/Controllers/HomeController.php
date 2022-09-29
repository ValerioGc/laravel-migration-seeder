<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\train;

class HomeController extends Controller
{
    public function index() {

        $today = date('Y-m-d');

        $trains = train::where('giorno_partenza', $today)->get();

        $navLinks = config('navLinks');

        return view('home', compact('trains'), ['links' => $navLinks]);
    }
}
