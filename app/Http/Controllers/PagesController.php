<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function masuk() {
        return view('signin');
    }

    public function reward() {
        return view('reward');
    }
}
