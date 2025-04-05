<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReservationRequest extends FormRequest
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
            
            'firstname' => 'required|string|max:250',
            'lastname' => 'required|string',
            'email' => 'required|string|max:250',
            'phone' => 'required|string|max:250',
            'foodname' => 'required|string',
            'foodtype' => 'required|string',
            'withfoodornot',
            
            'noofperson',
            'date',
            'time',
            
            'paymenttype',
           
        ];
    }
}