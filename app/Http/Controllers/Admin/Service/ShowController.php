<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Speciality;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Service $service){
        return view('admin.service.show', compact('service'));
    }

}
