<?php

namespace App\Http\Controllers\Admin\Patient;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Patient\StoreRequest;
use App\Models\Patient;
use App\Models\Speciality;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        Patient::firstOrCreate($data);
        return redirect()->route('admin.patient.index');}


}
