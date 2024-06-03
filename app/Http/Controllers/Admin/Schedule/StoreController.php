<?php

namespace App\Http\Controllers\Admin\Schedule;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Schedule\StoreRequest;
use App\Models\Schedule;
use App\Models\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        $thisSchedule = Schedule::firstOrCreate($data);


        $start = Carbon::parse($thisSchedule->schedule_start);
        $end = Carbon::parse($thisSchedule->schedule_end);

        $sessions = [];
        while ($start < $end->subMinutes($thisSchedule->doctor->speciality->speciality_duration)) {
            $session_end = $start->copy()->addMinutes($thisSchedule->doctor->speciality->speciality_duration);

            $newSession = new Session([
                'schedule_id' => $thisSchedule->id,
                'session_start' => $start,
                'session_end' => $session_end,
                'session_isBusy' => false
            ]);

            $sessions[] = $newSession;
            $start = $session_end->copy(); // Используем копию $session_end для следующей итерации
        }

$thisSchedule->sessions()->saveMany($sessions);


        return redirect()->route('admin.schedule.index');
    }
}
