<?php

namespace App\Http\Controllers\Patient\Record2;

use App\Http\Controllers\Controller;
use App\Models\Record;
use App\Models\Record2;
use App\Models\Speciality;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $records = Record2::all();
        return view('patient.record2.index', compact('records'));

    }
}
