<?php

namespace App\Http\Controllers\Admin\Record;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Record\StoreRequest;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Record;
use App\Models\Service;
use App\Models\Speciality;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        //Record::firstOrCreate($data);
        $record = Record::firstOrCreate($data);
        $speciality = Speciality::find($record->speciality->id);
        $patient = Patient::find($record->patient->id);
        $doctors = Doctor::where('speciality_id', $speciality->id)->get();
        $services = Service::where('speciality_id', $speciality->id)->get();
        return view('admin.record2.create', compact('record', 'speciality', 'patient', 'doctors', 'services'));
    }
}
