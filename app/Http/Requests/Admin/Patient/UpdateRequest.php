<?php

namespace App\Http\Requests\Admin\Patient;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'patient_surname' => 'required|string',
            'patient_name' => 'required|string',
            'patient_middlename' => 'string',
            'patient_gender' => 'required',
            'patient_dateofbirth' => 'required',
            'patient_medcardnumber' => 'required|integer',
            'patient_phonenumber' => 'required',
            'email' => 'string',
            'password' => 'string',
            'user_type' => 'string',
            'user_id' => 'required',
        ];
    }
}
