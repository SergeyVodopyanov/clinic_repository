<?php

namespace App\Http\Controllers\Admin\Patient;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Patient\StoreRequest;
use App\Models\Patient;
use App\Models\Speciality;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request, Patient $patient)
    {
        $data = $request->validated();
        $patient->update($data);
        return redirect()->route('admin.patient.show', compact('patient'));
    }

}
