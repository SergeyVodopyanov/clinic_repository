<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Models\Speciality;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $specialities = Speciality::all();
        return view('admin.service.create', compact('specialities'));
    }
}
