<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrianController extends Controller
{
    public function home(){
        return view('BrianMunene.home');   
    }
    public function students(){
        return view('BrianMunene.students');
    }
    public function fees(){
        return view('BrianMunene.fees');
    }
}
