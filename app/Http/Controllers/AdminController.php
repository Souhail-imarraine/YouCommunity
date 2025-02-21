<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users(){
        return view('dashboard.admin');
    }
    public function events(){
        return view('dashboard.admin');
    }
}
