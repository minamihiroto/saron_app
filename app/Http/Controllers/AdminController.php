<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Video;
use Validator;

class AdminController extends Controller
{
    public function share(){
        return view('admin.share');
    }

    
    public function store(AdminRequest $request)
    {
        $post = new Video;
        $form = $request->all();

        unset($form['_token']);
        $post->video_file = $request->video_file;
        $post->video_title = $request->video_title;
        $post->video_summary = $request->video_summary;
        $post->save();
        return redirect('member_limited');
    }

    public function destroy($id)
    {
        $items = Video::find($id)->delete();
        return redirect('member_limited');
    }

}
