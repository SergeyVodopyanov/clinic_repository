<?php

namespace App\Http\Controllers\Admin\Patient;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Patient\StoreRequest;
use App\Models\Admin;
use App\Models\Patient;
use App\Models\Speciality;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){

        $data = $request->validated();

        $user = User::firstOrCreate([
            'email' => $data['email'],
            'password' => Hash::make($data['password']), // Хэширование пароля перед сохранением
            'user_type' => 'patient',
        ]);

        Patient::firstOrCreate([
            'patient_surname' => $data['patient_surname'],
            'patient_name' => $data['patient_name'],
            'patient_middlename' => $data['patient_middlename'],
            'patient_gender' => $data['patient_gender'],
            'patient_dateofbirth' => $data['patient_dateofbirth'],
            'patient_medcardnumber' => $data['patient_medcardnumber'],
            'patient_phonenumber' => $data['patient_phonenumber'],
            'user_id' => $user->id,
        ]);

        return redirect()->route('admin.patient.index');
    }


}
