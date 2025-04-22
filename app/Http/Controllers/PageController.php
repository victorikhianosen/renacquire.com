<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('welcome');
    }


    public function services()
    {
        return view('services');
    }


    public function about()
    {
        return view('about');
    }


    public function team()
    {
        return view('team');
    }

    public function contact()
    {
    return view('contact');
    }

}
