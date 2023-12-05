<?php

namespace App\Http\Requests\FAQ;

use Illuminate\Foundation\Http\FormRequest;

class FAQRequest extends FormRequest
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
            'question' => 'required|string|min:2',
            'answer' => 'required|string|min:2',
        ];

        if (in_array("PUT", request()->route()->methods)) {
            $rules['question'] = 'required|string|min:2';
            $rules['answer'] = 'required|string|min:2';
        }
        return $rules;
    }
}
