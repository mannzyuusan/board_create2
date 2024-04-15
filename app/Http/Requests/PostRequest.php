<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
   
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'post.title' => 'required|string|max:100',
            'post.body' => 'required|string|max:4000',
            'post.category_id' => 'prohibited_if:post.category_id,null',
            'post.thread_id' => 'prohibited_if:post.thread_id,null',
        ];
    }
    
     public function messages()
    {
        return [
            'prohibited_if' => '科目名を選択してください。',
        ];
    }
}
