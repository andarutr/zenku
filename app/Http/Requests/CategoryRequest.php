<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules()
    {
        $id = $this->route('category'); 

        switch($this->method())
        {
            case 'POST': 
                return [
                    'category' => 'required|unique:categories',
                ];

            case 'PUT':
            case 'PATCH':
                return [
                    'category' => 'required|unique:categories,category,'.$id,
                ];

            default:
                return [];
        }
    }

    /**
     * Get custom messages for validation errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'category.required' => 'Nama kategori wajib diisi.',
            'category.unique' => 'Nama kategori sudah digunakan.',
        ];
    }
}