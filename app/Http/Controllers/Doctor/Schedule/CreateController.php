<?php

namespace App\Http\Controllers\Doctor\Schedule;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();
        $doctor = $user->doctor;
        return view('doctor.schedule.create', compact('doctor'));
    }
}
