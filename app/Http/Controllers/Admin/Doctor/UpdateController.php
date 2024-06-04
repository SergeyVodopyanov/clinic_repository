<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Doctor\UpdateRequest;
use App\Models\Doctor;
use App\Models\Speciality;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Doctor $doctor)
    {
        $data = $request->validated();
        $doctor->update([
            'doctor_surname' => $data['doctor_surname'],
            'doctor_name' => $data['doctor_name'],
            'doctor_middlename' => $data['doctor_middlename'],
            'speciality_id' => $data['speciality_id'],
            'user_id' => $data['user_id'],
        ]);

        $user = $doctor->user;

        $user->update([
            'email' => $data['email'],
            //'password' => Hash::make($data['password']), // Хэширование пароля перед сохранением
            'user_type' => 'doctor',
        ]);
        return redirect()->route('admin.doctor.show', compact('doctor'));
    }

}
