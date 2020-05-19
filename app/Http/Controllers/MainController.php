<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index(){
        $user = Auth::user();
        $param = ['user'=>$user];
        $items = News::orderBy('created_at','desc')->get();
        return view('main.index',['items'=>$items],$param);
    }

    public function about(){
        $user = Auth::user();
        $param = ['user'=>$user];
        return view('main.about',$param);
    }

    public function lesson_menu(){
        $user = Auth::user();
        $param = ['user'=>$user];
        return view('main.lesson_menu',$param);
    }

    public function access(){
        $user = Auth::user();
        $param = ['user'=>$user];
        return view('main.access',$param);
    }

    public function news($id){
        $user = Auth::user();
        $param = ['user'=>$user];
        $item = News::find($id);
        return view('main.news',['item'=>$item],$param);
    }
}
