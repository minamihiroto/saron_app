<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberLimitedController extends Controller
{
    public function video_list(){
        return view('member_limited.video_list');
    }

    public function profile(){
        return view('member_limited.profile');
    }
}
