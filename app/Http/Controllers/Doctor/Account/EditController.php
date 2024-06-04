<?php

namespace App\Http\Controllers\Doctor\Account;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Speciality;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Doctor $doctor)
    {
        $specialities = Speciality::all();
        return view('doctor.account.edit', compact('doctor', 'specialities'));
    }
}
