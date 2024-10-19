<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeroSectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            "hero_title" => "required|string|max:2",
            "hero_name" => "required",
            "hero_designation" => "required",

        ];
    }


    public function messages(){
        return [
            "hero_title.required" => "ফাকা রাখা যাবে না "
        ];
    }
}
