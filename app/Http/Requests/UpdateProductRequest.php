<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'string|required|unique:products,name,'.$this->product.'|max:50',
            'description' => 'string|nullable|max:255',
            'status_id' => 'integer|required|exists:statuses,id',
            'country_id' => 'integer|required|exists:countries,id',
            'category_id' => 'integer|required|exists:categories,id',
        ];
    }
}
