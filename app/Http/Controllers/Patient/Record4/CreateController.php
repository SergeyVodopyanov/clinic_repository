<?php

namespace App\Http\Controllers\Patient\Record4;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Speciality;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $patients = Patient::all();
        $specialities = Speciality::all();
        return view('patient.record.create', compact('specialities', 'patients'));
    }
}
