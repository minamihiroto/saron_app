<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Validator;

class AdminController extends Controller
{
    public function share(){
        return view('admin.share');
    }

    
    public function store(Request $request)
    {
        $post = new Video;
        $form = $request->all();

        $rules = [
            'video_file' => 'required', 
            'video_title' => 'required',
            'video_summary' => 'required',
        ];
        $message = [
            'video_file.required' => '動画を選択して下さい',
            'video_title.required'=> 'タイトルが入力されていません',
            'video_summary.required'=> '概要が入力されていません'
        ];

        $validator = Validator::make($form, $rules, $message);

        if($validator->fails()){
            return redirect('admin/share')
                ->withErrors($validator)
                ->withInput();
        }else{
            unset($form['_token']);
            $post->video_file = $request->video_file;
            $post->video_title = $request->video_title;
            $post->video_summary = $request->video_summary;
            $post->save();
            return redirect('member_limited');
        }
    }

    public function destroy($id)
    {
        $items = Video::find($id)->delete();
        return redirect('member_limited');
    }

}
