<?php

namespace App\Http\Controllers\Admin\Record2;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Record2\StoreRequest;
use App\Models\Record;
use App\Models\Record2;
use App\Models\Speciality;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        print_r($data);
        Record2::firstOrCreate($data);
        return redirect()->route('admin.record2.index');}


}
