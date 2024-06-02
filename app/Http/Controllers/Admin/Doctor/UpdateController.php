<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Doctor\StoreRequest;
use App\Models\Doctor;
use App\Models\Speciality;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request, Doctor $doctor)
    {
        $data = $request->validated();
        $doctor->update($data);
        return redirect()->route('admin.doctor.show', compact('doctor'));
    }

}
