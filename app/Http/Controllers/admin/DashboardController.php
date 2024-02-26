<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        dd('Welcome to dashbpard');
        return view('admin.dashboard');
    }
}
