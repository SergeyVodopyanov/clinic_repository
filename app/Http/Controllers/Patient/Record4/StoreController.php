<?php

namespace App\Http\Controllers\Patient\Record4;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Record4\StoreRequest;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Record;
use App\Models\Record2;
use App\Models\Record4;
use App\Models\Schedule;
use App\Models\Service;
use App\Models\Session;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Record4::firstOrCreate($data);

        //$record = Record::find($recordId);
        //$record->field_name = $newValue;
        //$record->save();

        $records = Record4::where('patient_id', Auth::user()->patient->id)->get();


        $schedule = Schedule::where('doctor_id', $data['doctor_id'])->where('schedule_date', $data['record_date'])->first();
        $session = Session::where('schedule_id', $schedule->id)->where('session_start', $data['record_time'])->first();
        $session->session_isBusy = True;
        $session->save();


        return redirect()->route('patient.record4.index', compact('records', 'data'));
    }
}

