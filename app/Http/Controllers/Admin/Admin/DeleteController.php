<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Admin\StoreRequest;
use App\Models\Patient;
use App\Models\Admin;
use App\Models\Speciality;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('admin.admin.index');
    }

}
