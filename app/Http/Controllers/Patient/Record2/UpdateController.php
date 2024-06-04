<?php

namespace App\Http\Controllers\Patient\Record2;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Record\StoreRequest;
use App\Models\Record;
use App\Models\Speciality;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request, Record $record)
    {
        $data = $request->validated();
        $record->update($data);
        return redirect()->route('patient.record.show', compact('record'));
    }

}
