<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Index
    public function index(){
        return view('pages.index');
    }
    // Register

    public function register(){
        return view('pages.register');
    }

    public function listing(){
        return view('pages.listing');
    }

}
