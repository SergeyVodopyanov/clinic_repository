<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Service\StoreRequest;
use App\Models\Service;
use App\Models\Speciality;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        Service::firstOrCreate($data);
        return redirect()->route('admin.service.index');}


}
