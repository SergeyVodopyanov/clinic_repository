<?php

namespace App\Http\Controllers\Doctor\Account;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();
        //$doctor = Doctor::where('user_id', $user->id)->first();
        $doctor = $user->doctor;
        return view('doctor.account.index', compact('user', 'doctor'));
    }
}
