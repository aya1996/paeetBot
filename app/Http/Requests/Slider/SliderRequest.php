<?php

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
        $rules = [
            'title' => 'required|string|min:2',
            'description' => 'required|string|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',        ];

        if (in_array("PUT", request()->route()->methods)) {
            $rules['title'] = 'required|string|min:2';
            $rules['description'] = 'required|string|min:2';
            $rules['image'] = 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg,webp';
        }
        return $rules;
    }
}
