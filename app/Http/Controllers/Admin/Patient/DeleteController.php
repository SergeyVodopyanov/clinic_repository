<?php

namespace App\Http\Controllers\Admin\Patient;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Speciality\StoreRequest;
use App\Models\Patient;
use App\Models\Speciality;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('admin.patient.index');
    }

}
