<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'patient_surname' => 'string',
            //'patient_name' => 'string',
            //'patient_middlename' => 'string',
            //'patient_gender' => 'required',
            //'patient_dateofbirth' => 'required',
            //'patient_medcardnumber' => 'required',
            //'patient_phonenumber' => 'required',
            'email' => 'string',
            'password' => 'string',
            'user_type' => 'string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
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

        return $user;
    }
}
