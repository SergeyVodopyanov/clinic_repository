<?php

namespace App\Http\Requests\Admin\Patient;

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
           'record_title' => 'required|string',
        ];

    }
}
/*
 'patient_surname' => 'required|string',
            'patient_name' => 'required|string',
            'patient_middlename' => 'string',
            'patient_gender' => 'required',
            'patient_dateofbirth' => 'required',
            'patient_medcardnumber' => 'required|integer',
            'patient_phonenumber' => 'required',
            'patient_email' => 'required',
 */
