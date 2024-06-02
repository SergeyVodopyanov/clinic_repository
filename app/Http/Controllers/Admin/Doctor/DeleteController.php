<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Doctor\StoreRequest;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Speciality;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('admin.doctor.index');
    }

}
