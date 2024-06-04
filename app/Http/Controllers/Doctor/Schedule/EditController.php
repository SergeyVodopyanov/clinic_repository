<?php

namespace App\Http\Controllers\Doctor\Schedule;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
    public function __invoke(Schedule $schedule)
    {
        $doctor = Auth::user()->doctor;
        return view('doctor.schedule.edit', compact('schedule', 'doctor'));
    }
}
