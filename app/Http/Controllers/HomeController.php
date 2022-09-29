<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\trains;

class HomeController extends Controller
{
    public function index() {

        $trains = trains::all() ;

        $navLinks = config('navLinks');

        return view('home', compact('trains'), ['links' => $navLinks]);
    }
}
