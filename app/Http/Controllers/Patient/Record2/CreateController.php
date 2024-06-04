<?php

namespace App\Http\Controllers\Patient\Record2;

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
        return view('patient.record2.create', compact('specialities', 'patients'));
    }
}
