<?php

namespace App\Http\Controllers\Admin\Speciality;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Speciality\StoreRequest;
use App\Models\Speciality;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        Speciality::firstOrCreate($data);
        return redirect()->route('admin.speciality.index');}


}
