<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Admin\StoreRequest;
use App\Models\Admin;
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
            'user_type' => 'admin',
        ]);

        Admin::firstOrCreate([
            'admin_surname' => $data['admin_surname'],
            'admin_name' => $data['admin_name'],
            'admin_middlename' => $data['admin_middlename'],
            'user_id' => $user->id,
        ]);

        return redirect()->route('admin.admin.index');
    }


}
