<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Speciality;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Service $service)
    {
        $specialities = Speciality::all();
        return view('admin.service.edit', compact('service'), compact('specialities'));
    }
}
