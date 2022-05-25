<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile() {
        $user = array('title' => 'User Profil');
        return view('profile', $user);
    }

    public function setting() {
        $user = array('title' => 'Edit Profil');
        return view('editprofile', $user);
    }
}
