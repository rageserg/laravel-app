<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'subject' => 'required|min:6',
            'body' => 'required|min:10',
            'article_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'subject.required' => 'Это поле надо обязательно заполнить',
            'subject.min' => 'Это поле должно быть длиннее 6 символов',
            'body.required' => 'Это поле надо обязательно заполнить',
            'body.min' => 'Это поле должно быть длиннее 10 символов',
        ];

    }
}
