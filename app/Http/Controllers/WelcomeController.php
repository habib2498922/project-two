<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        return view('front.home.home-content');
    }

    public function support() {
        return view('front.support.support-content');
    }
}






