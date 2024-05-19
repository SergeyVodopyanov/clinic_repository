<?php

namespace App\Http\Controllers\Admin\Speciality;

use App\Http\Controllers\Controller;
use App\Models\Speciality;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $specialities = Speciality::all();
        return view('admin.specialities.index', compact('specialities'));
    }
}
