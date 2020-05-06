<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile() {
        return view('/user/profile');
    }

    public function reward() {
        return view('/user/reward');
    }

    public function order() {
        return view('/user/order');
    }

    public function history() {
        return view('/user/history');
    }
}
