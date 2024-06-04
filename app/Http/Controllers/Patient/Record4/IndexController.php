<?php

namespace App\Http\Controllers\Patient\Record4;

use App\Http\Controllers\Controller;
use App\Models\Record;
use App\Models\Record4;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();
        $patient = $user->patient;
        //$patient = Patient::where('user_id', $user->id)->first();
        //$records = Record4::where('patient_id', $patient->id)->get();



        $records = Record4::where('patient_id', Auth::user()->patient->id)->get();

        return view('patient.record4.index', compact('records'));

    }
}
