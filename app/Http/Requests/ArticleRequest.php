<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'name'=> 'required | min:3 | max:50',
            'price'=> 'required | min:1 | max:999,99 | numeric',
            'description'=> 'required | min:10',
            'image'=> 'nullable|image|max:32000',
            'quantity'=> 'required | min:1 | max:999,99 | numeric',
        ];
    }
}
