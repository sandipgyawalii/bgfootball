<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function about()
    {
        return view('user.about');
    }
    public function team()
    {
        return view('user.team');
    }

    public function karken()
    {
        return view('user.karken');
    }

    public function facilites()
    {
        return view('user.facilites');
    }

    public function gallery()
    {
        return view('user.gallery');

    }

    public function contact()
    {
        return view('user.contact');
    }

    public function blog()
    {
        return view('user.blog_details');
    }
}
