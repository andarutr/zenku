<?php

namespace App\Http\Requests\Guru;

use Illuminate\Foundation\Http\FormRequest;

class PostMateriRequest extends FormRequest
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
            'title_card' => 'required|unique:cards',
            'picture_card' => 'required',
            'id_category' => 'required',
            'video_card' => 'required',
            'description' => 'required',
        ];
    }
}
