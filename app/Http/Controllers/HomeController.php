<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\train;

class HomeController extends Controller
{
    public function index() {

        $trains = train::all() ;

        $navLinks = config('navLinks');

        return view('home', compact('trains'), ['links' => $navLinks]);
    }
}
