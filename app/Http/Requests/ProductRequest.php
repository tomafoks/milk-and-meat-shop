<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required|min:5',
            'quantity' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'thumbnail' => 'nullable|image',
        ];
    }

    function messages()
    {
        return [
            'title.required' => 'Поле "Название" обязательно для заполнения',
            'description.required' => 'Поле "Описание" обязательно для заполнения',
            'quantity.required' => 'Поле "Ко-во" обязательно для заполнения',
            'price.required' => 'Поле "Цена" обязательно для заполнения',
            'description.min' => 'Поле "Описание" должно иметь :min символов'
        ];
    }
}
