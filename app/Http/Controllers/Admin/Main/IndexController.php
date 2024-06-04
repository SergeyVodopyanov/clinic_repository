<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $patients = Patient::all();
        return view('admin.patient.index', copact('patients'));
    }
}
