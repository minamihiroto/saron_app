<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'video_file' => 'required', 
            'video_title' => 'required',
            'video_summary' => 'required',    
        ];
    }

    public function message()
    {
        return[
            'video_file.required' => '動画を選択して下さい',
            'video_title.required'=> 'タイトルが入力されていません',
            'video_summary.required'=> '概要が入力されていません'
        ];
    }
}
