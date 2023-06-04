<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminRaporController extends Controller
{
    public function raporlar(){
        return view('admin.raporlar');
    }

}
