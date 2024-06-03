<?php

namespace App\Http\Controllers\Admin\Record2;

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
        return view('admin.record2.index', compact('records'));

    }
}
