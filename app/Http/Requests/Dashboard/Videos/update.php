<?php

namespace App\Http\Requests\Dashboard\Videos;

use Illuminate\Foundation\Http\FormRequest;

class update extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'meta_keywords' => [ 'max:255'],
            'description' => ['required', 'string', 'min:10'],
            'youtube' => ['required', 'url', 'min:10'],
            'cat_id' => ['required', 'integer'],
            'published' => ['required'],
            'image' => ['image'],
        ];
    }
}
