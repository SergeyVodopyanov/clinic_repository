<?php

namespace App\Http\Controllers\Patient\Record4;

use App\Http\Controllers\Controller;
use App\Models\Record;
use App\Models\Speciality;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Record $record)
    {
        return view('patient.record.edit', compact('record'));
    }
}
