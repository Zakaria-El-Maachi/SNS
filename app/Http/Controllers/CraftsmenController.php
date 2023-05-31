<?php

namespace App\Http\Controllers;

use app\Models\request;

class CraftsmenController extends Controller
{
    //

    public function index()
    {
        $requests = auth()->user()->requests;
        return view('craftsmen', compact('requests'));
    }
}
