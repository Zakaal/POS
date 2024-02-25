<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function userProfile($id, $name)
    {
        return view('profile.up')
            ->with('id', $id)
            ->with('name', $name);
    }

}
