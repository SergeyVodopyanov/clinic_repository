<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Admin\UpdateRequest;
use App\Models\Admin;
use App\Models\Speciality;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Admin $admin, User $user)
    {
        $data = $request->validated();

        $admin->update([
            'admin_surname' => $data['admin_surname'],
            'admin_name' => $data['admin_name'],
            'admin_middlename' => $data['admin_middlename'],
            'user_id' => $data['user_id'],
        ]);

        $user = $admin->user;

        $user->update([
            'email' => $data['email'],
            //'password' => Hash::make($data['password']), // Хэширование пароля перед сохранением
            'user_type' => 'admin',
        ]);


        return redirect()->route('admin.account.index', compact('admin'));
    }

}
