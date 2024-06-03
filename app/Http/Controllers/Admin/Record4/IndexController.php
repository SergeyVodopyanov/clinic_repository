<?php

namespace App\Http\Controllers\Admin\Record4;

use App\Http\Controllers\Controller;
use App\Models\Record;
use App\Models\Record4;
use App\Models\Speciality;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $records = Record4::all();
        return view('admin.record4.index', compact('records'));

    }
}
