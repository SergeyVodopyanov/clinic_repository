<?php

namespace App\Http\Requests\Patient\Record4;

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
            'patient_id' => 'required',
            'speciality_id' => 'required',
            'doctor_id' => 'required',
            'service_id' => 'required',
            'record_date' => 'required',
            'record_time' => 'required',
        ];
    }
}
