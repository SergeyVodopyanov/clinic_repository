<?php

namespace App\Http\Controllers\Doctor\Schedule;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        $schedules = Schedule::where('doctor_id', Auth::user()->doctor->id)->get();
        return view('doctor.schedule.index', compact('schedules'));
    }
}
