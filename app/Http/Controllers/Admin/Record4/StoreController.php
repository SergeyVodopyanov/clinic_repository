<?php

namespace App\Http\Controllers\Admin\Record4;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Record4\StoreRequest;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Record;
use App\Models\Record2;
use App\Models\Record4;
use App\Models\Schedule;
use App\Models\Service;
use App\Models\Speciality;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Record4::firstOrCreate($data);
        return redirect()->route('admin.record4.index');
    }
}
