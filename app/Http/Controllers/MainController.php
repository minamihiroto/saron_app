<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('main.index');
    }

    public function about(){
        return view('main.about');
    }

    public function lesson_menu(){
        return view('main.lesson_menu');
    }

    public function access(){
        return view('main.access');
    }

}
