<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Speciality\StoreRequest;
use App\Models\Service;
use App\Models\Speciality;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.service.index');
    }

}
