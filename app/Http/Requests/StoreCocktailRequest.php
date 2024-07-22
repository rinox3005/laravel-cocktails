<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCocktailRequest extends FormRequest
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
            'name' => ['max:100', 'required'],
            'price' => ['min:0', 'numeric', 'regex:/\d+(\.\d{0,2})?/'],
            'img_url' => ['url', 'max:255'],
            'description' => ['max:255', 'string', 'required'],
            'ingredients' => ['max:255', 'required', 'string'],
            'type_of_prep' => ['max:30', 'required', 'string'],
            'serving_temp' => ['numeric', 'required', 'regex:/\d+(\.\d{0,1})?/'],
            'glass_type' => ['max:100', 'string'],
            'needs_ice' => ['max:1', 'min:0', 'required'],
            'preparation' => ['max:30000', 'string'],
            'is_available' => ['max:1', 'min:0', 'required'],
        ];
    }
}
