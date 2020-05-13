<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminnewsRequest extends FormRequest
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
            'news_title' => 'required',
            'news_message' => 'required',    
        ];
    }

    public function message()
    {
        return[
            'news_title.required'=> 'タイトルが入力されていません',
            'news_message.required'=> '内容が入力されていません'
        ];
    }
}
