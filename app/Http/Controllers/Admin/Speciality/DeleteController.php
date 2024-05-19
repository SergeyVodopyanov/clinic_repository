<?php

namespace App\Http\Controllers\Admin\Speciality;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Speciality\StoreRequest;
use App\Models\Speciality;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Speciality $speciality)
    {
        $speciality->delete();
        return redirect()->route('admin.speciality.index');
    }

}
