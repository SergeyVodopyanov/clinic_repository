<?php

namespace App\Http\Controllers\Admin\Record;

use App\Http\Controllers\Controller;
use App\Models\Speciality;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $specialities = Speciality::all();
        return view('admin.record.create', compact('specialities'));
    }
}
