<?php

namespace App\Http\Controllers\Patient\Record2;

use App\Http\Controllers\Controller;
use App\Http\Requests\Patient\Record2\StoreRequest;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Record;
use App\Models\Record2;
use App\Models\Schedule;
use App\Models\Service;
use App\Models\Speciality;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        //Record2::firstOrCreate($data);
        $record = Record2::firstOrCreate($data);
        $speciality = Speciality::find($record->speciality->id);
        $patient = Patient::find($record->patient->id);
        $doctor = Doctor::find($record->doctor->id);
        $service = Service::find($record->service->id);
        $schedules = Schedule::where('doctor_id', $doctor->id)->get();
        return view('patient.record3.create', compact('record', 'speciality', 'patient', 'doctor', 'service', 'schedules'));
    }

}
