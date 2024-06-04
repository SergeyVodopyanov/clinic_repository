<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();
        $admin = Admin::where('user_id', $user->id)->first();
        return view('admin.account.index', compact('user', 'admin'));
    }
}
