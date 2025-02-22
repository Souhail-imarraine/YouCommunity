<?php

namespace App\Http\Controllers;


class TestController extends Controller
{
    public function returnName(){
        return view('souhail');
    }
    
    public function sayMyname($name = "not found Name"){
        return "your name is : $name and you id is ";
    }
}
