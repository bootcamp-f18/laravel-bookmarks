<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit() {
        return view('profiles.edit');
    }

    public function update(Request $request) {

        return $request->all();

    }
}
