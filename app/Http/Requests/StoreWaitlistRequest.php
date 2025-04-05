<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWaitlistRequest extends FormRequest
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
           
        'firstname'=>'required|string|max:250',
        'lastname' => 'required|string|max:250',
        'email' => 'required|string|max:250',
        'phone' => 'required|string|max:250',
        'foodname' => 'required|string|max:250',
        'foodtype' => 'required|string|max:250',
      
        ];
    }
}