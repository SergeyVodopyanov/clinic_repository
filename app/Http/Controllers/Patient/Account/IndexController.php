<?php

namespace App\Http\Controllers\Patient\Account;

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
        $patient = Patient::where('user_id', $user->id)->first();
        return view('patient.account.index', compact('user', 'patient'));
    }
}
