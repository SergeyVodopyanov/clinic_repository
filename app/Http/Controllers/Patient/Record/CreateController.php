<?php

namespace App\Http\Controllers\Patient\Record;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
{
    public function __invoke()
    {
        $patient = Auth::user()->patient;
        $specialities = Speciality::all();
        return view('patient.record.create', compact('specialities', 'patient'));
    }
}
