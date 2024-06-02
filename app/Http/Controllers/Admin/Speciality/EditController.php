<?php

namespace App\Http\Controllers\Admin\Speciality;

use App\Http\Controllers\Controller;
use App\Models\Speciality;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Speciality $speciality)
    {
        return view('admin.speciality.edit', compact('speciality'));
    }
}
