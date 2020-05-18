<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MemberLimitedController extends Controller
{
    public function video_list(){
        $user = Auth::user();
        $param = ['user'=>$user];
        $items = Video::all();
        $disk = Storage::disk('s3'); 
        $moviePath = str_replace("%20", "", $disk->url(" "));
        return view('member_limited.video_list',['items'=>$items],$param)->with(compact('moviePath'));
    }

    public function profile(){
        $user = Auth::user();
        $param = ['user'=>$user];
        return view('member_limited.profile',$param);
    }
}
