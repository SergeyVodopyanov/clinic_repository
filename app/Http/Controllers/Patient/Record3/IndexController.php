<?php

namespace App\Http\Controllers\Patient\Record3;

use App\Http\Controllers\Controller;
use App\Models\Record;
use App\Models\Record3;
use App\Models\Speciality;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $records = Record3::all();
        return view('patient.record3.index', compact('records'));

    }
}
