<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Comment\Doc;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();
        $doctors = Doctor::all();
        return view('main.index', compact('user', 'doctors'));
    }
}
