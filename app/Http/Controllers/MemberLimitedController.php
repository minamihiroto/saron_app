<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Illuminate\Support\Facades\Auth;

class MemberLimitedController extends Controller
{
    public function video_list(){
        $user = Auth::user();
        $param = ['user'=>$user];
        $items = Video::all();
        return view('member_limited.video_list',['items'=>$items],$param);
    }

    public function profile(){
        $user = Auth::user();
        $param = ['user'=>$user];
        return view('member_limited.profile',$param);
    }
}
