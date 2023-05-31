<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OngoingController extends Controller
{
    //
    public function index()
    {
        $requests = auth()->user()->requests;
        return view('requests', compact('requests'));
    }
}
