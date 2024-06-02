<?php

namespace App\Http\Controllers\Admin\Record;

use App\Http\Controllers\Controller;
use App\Models\Record;
use App\Models\Speciality;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $records = Record::all();
        return view('admin.record.index', compact('records'));
    }
}
