<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nomor_bmn' =>  'required|max:255',
            'name' =>  'required|max:255',
            'users_id' =>  'required|exists:users,id',
            'categories_id' =>  'required|exists:categories,id',
            'rooms_id' =>  'required|exists:rooms,id',
            'description' =>  'required|max:255',
            'stock' =>  'required|max:255',
            'location' =>  'required|max:255',
            'condition' =>  'required|max:255',
        ];
        
    }
}
