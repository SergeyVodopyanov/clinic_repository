<?php

namespace App\Http\Controllers\Admin\Record;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Record\StoreRequest;
use App\Models\Record;
use App\Models\Speciality;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        Record::firstOrCreate($data);
        return redirect()->route('admin.record.index');}


}
