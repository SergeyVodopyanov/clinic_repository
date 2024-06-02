<?php

namespace App\Http\Controllers\Admin\Schedule;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Schedule $schedule){
        return view('admin.schedule.show', compact('schedule'));
    }

}
