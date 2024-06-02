<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Speciality;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Doctor $doctor)
    {
        $specialities = Speciality::all();
        return view('admin.doctor.edit', compact('doctor', 'specialities'));
    }
}
