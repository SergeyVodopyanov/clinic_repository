<?php

namespace App\Http\Controllers\Admin\Speciality;

use App\Http\Controllers\Controller;
use App\Models\Speciality;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Speciality $speciality){
        return view('admin.specialities.show', compact('speciality'));
    }

}
