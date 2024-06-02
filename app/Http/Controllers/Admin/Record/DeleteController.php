<?php

namespace App\Http\Controllers\Admin\Record;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Speciality\StoreRequest;
use App\Models\Patient;
use App\Models\Record;
use App\Models\Speciality;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Record $record)
    {
        $record->delete();
        return redirect()->route('admin.record.index');
    }

}
