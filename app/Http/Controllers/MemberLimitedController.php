<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class MemberLimitedController extends Controller
{
    public function video_list(){
        $items = Video::all();
        return view('member_limited.video_list',['items'=>$items]);
    }

    public function profile(){
        return view('member_limited.profile');
    }
}
