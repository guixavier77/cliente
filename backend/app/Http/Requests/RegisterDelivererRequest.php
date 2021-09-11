<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterDelivererRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'image' => 'required',
            'cnh_image' => 'required',
            'cpf' => 'required|cpf',
            'phone' => 'required|celular_com_ddd', 
            'street' => 'required',
            'neighborhood' => 'required',
            'number' =>'required',
            'city' =>'required',	
            'state' =>'required', 
        ];
    }
}
