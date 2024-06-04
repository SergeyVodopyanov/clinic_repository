<?php

namespace App\Http\Controllers\Patient\Record;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Record;
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
        $records = Record::where('patient_id', $patient->id)->get();
        return view('patient.record.index', compact('records'));
    }
}
