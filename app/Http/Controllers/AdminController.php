<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\AdminnewsRequest;
use Illuminate\Support\Facades\Storage;
use App\Video;
use App\News;
use Validator;
use Illuminate\Support\Facades\Auth;
use Gate;

class AdminController extends Controller
{
    public function share(){
        if(Gate::allows('isAdmin')){
            $user = Auth::user();
            $param = ['user'=>$user];
        }else{
            dd('アクセスが許可されていないユーザです。');
        } 
        return view('admin.share',$param);
    }

    
    public function store(AdminRequest $request)
    {
        $post = new Video;
        $form = $request->all();

        unset($form['_token']);
        //$post->video_file = $request->video_file;
        $post->video_file = $request->file('video_file')->getClientOriginalName();
        $post->video_title = $request->video_title;
        $post->video_summary = $request->video_summary;
        $post->save();

        $disk = Storage::disk('s3'); 

        $disk->putFileAs("" , $request->file('video_file'), $post->video_file, 'public');

        return redirect('member_limited');
    }

    public function destroy($id)
    {
        $items = Video::find($id)->delete();
        return redirect('member_limited');
    }

    public function news_share()
    {
        if(Gate::allows('isAdmin')){
            $user = Auth::user();
            $param = ['user'=>$user];
        }else{
            dd('アクセスが許可されていないユーザです。');
        }
        return view('admin.news_share',$param);
    }

    public function announcement(AdminnewsRequest $request)
    {
        $post = new News;
        $form = $request->all();

        unset($form['_token']);
        $post->news_title = $request->news_title;
        $post->news_message = $request->news_message;
        $post->save();
        return redirect('/');
    }

    public function news_destroy($id)
    {
        $items = News::find($id)->delete();
        return redirect('/');
    }
}
