<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function showCustomPage()
    {
        // Render the custom view
        return view('custom.addClient');
    }
}

