<?php

namespace App\Http\Controllers\Admin\Schedule;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Schedule;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Schedule $schedule)
    {
        $doctors = Doctor::all();
        return view('admin.schedule.edit', compact('schedule', 'doctors'));
    }
}
