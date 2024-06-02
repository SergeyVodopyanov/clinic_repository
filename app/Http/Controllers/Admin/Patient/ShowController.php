<?php

namespace App\Http\Controllers\Admin\Patient;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Speciality;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Patient $patient){
        return view('admin.patient.show', compact('patient'));
    }

}
