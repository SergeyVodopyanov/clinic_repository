<?php

namespace App\Http\Controllers\Doctor\Schedule;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Schedule\StoreRequest;
use App\Models\Schedule;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('doctor.schedule.index');
    }

}
