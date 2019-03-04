<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() 
    {
        return view('artwork');
    }

    public function login() 
    {
        return view('login');
    }

    public function welcome() 
    {
        return view('welcome');
    }

    public function about() 
    {
        return view('about');
    }
}
