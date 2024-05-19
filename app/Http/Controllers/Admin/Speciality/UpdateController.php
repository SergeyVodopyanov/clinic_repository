<?php

namespace App\Http\Controllers\Admin\Speciality;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Speciality\StoreRequest;
use App\Models\Speciality;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request, Speciality $speciality)
    {
        $data = $request->validated();
        $speciality->update($data);
        return redirect()->route('admin.speciality.show', compact('speciality'));
    }

}
