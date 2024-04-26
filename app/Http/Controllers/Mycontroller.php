<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function receiveForm1(Request $request)
    {
        $firstName = $request->input('name');
        $lastName = $request->input('lname');

        return view('show_form_data', compact('firstName', 'lastName'));
    }
}
