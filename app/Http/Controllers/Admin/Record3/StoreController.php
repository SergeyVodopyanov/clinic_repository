<?php

namespace App\Http\Controllers\Admin\Record3;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Record3\StoreRequest;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Record;
use App\Models\Record2;
use App\Models\Record3;
use App\Models\Schedule;
use App\Models\Service;
use App\Models\Speciality;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        //Record2::firstOrCreate($data);
        $record = Record3::firstOrCreate($data);
        $speciality = Speciality::find($record->speciality->id);
        $patient = Patient::find($record->patient->id);
        $doctor = Doctor::find($record->doctor->id);
        $service = Service::find($record->service->id);
        $date = $record->record_date;
        $schedule = Schedule::where('doctor_id', $doctor->id)->where('schedule_date', $date)->first();
        $sessions = $schedule->sessions;
        $unBusySessions = [];
        foreach ($sessions as $session){
            if (!$session->session_isBusy){
                array_push($unBusySessions, $session);
            }
        }
        $sessions = $unBusySessions;
        return view('admin.record4.create', compact('record', 'speciality', 'patient', 'doctor', 'service', 'date', 'sessions'));
    }
}
