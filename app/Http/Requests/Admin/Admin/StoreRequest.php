<?php

namespace App\Http\Requests\Admin\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
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
            'admin_surname' => 'required|string',
            'admin_name' => 'required|string',
            'admin_middlename' => 'string',
            'email' => 'string',
            'password' => 'string',
            'user_type' => 'string',
        ];

    }
}
