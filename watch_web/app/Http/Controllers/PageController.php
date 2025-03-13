<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {
    public function home() {
        return view('home');
    }

    public function collection() {
        return view('collection');
    }

    public function contact() {
        return view('contact');
    }

    public function signIn() {
        return view('sign-in');
    }

    public function signUp() {
        return view('sign-up');
    }
}
