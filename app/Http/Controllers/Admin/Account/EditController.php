<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Speciality;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Admin $admin)
    {
        return view('admin.account.edit', compact('admin'));
    }
}
