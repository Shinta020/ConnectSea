<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class EditProfileController extends Controller
{
    /**
     * Show the update profile page.
     *
     * @param  Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(Request $request)
    {
        return view('editprofile', [
            'user' => $request->user()
        ]);
    }
}
