<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Doctor\StoreRequest;
use App\Models\Admin;
use App\Models\Doctor;
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
            'user_type' => 'doctor',
        ]);

        Doctor::firstOrCreate([
            'doctor_surname' => $data['doctor_surname'],
            'doctor_name' => $data['doctor_name'],
            'doctor_middlename' => $data['doctor_middlename'],
            'speciality_id' => $data['speciality_id'],
            'user_id' => $user->id,

        ]);
        return redirect()->route('admin.doctor.index');}


}
