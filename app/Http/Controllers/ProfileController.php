<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile.profile', [
            'progress' => Auth::user()->profileProgress(),
        ]);
    }

    public function accountSettings(){
        return view('profile.settings', [
            'progress' => Auth::user()->profileProgress(),
        ]);
    }
}
