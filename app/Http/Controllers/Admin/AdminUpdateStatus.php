<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUpdateStatus extends Controller
{
    public function update_status($id, $status){
        $user = User::find($id);

        $user->status = $status;

        $user->save();

        return redirect()->back()->with('basarili', 'KULLANICININ STATÜSÜ GÜNCELLENDİ.');
    }
}
