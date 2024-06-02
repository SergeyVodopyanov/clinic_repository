<?php

namespace App\Http\Controllers\Admin\Record;

use App\Http\Controllers\Controller;
use App\Models\Record;
use App\Models\Speciality;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Record $record){
        return view('admin.record.show', compact('record'));
    }

}
