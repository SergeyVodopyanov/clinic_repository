<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Service\StoreRequest;
use App\Models\Service;
use App\Models\Speciality;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request, Service $service)
    {
        $data = $request->validated();
        $service->update($data);
        return redirect()->route('admin.service.show', compact('service'));
    }

}
