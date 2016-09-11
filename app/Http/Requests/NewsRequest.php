<?php

namespace maldenll\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title'=>'required',
            'text'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Please enter a title.',
            'text.required' => 'Please enter a message for the news items'
        ];
    }
}
