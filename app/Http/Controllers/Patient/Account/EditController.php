<?php

namespace App\Http\Controllers\Patient\Account;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Patient;
use App\Models\Speciality;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Patient $patient)
    {
        return view('patient.account.edit', compact('patient'));
    }
}
