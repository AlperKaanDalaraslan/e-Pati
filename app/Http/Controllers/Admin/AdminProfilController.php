<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminProfilController extends Controller
{
    public function profil($id){
        $data = User::find($id);
        return view('admin.admin_profil', compact('data'));
    }
}
