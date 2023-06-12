<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CraftRequestController extends Controller
{
    public function index()
    {
        $requests = auth()->user()->craftsman->requests;
        return view('craftsman/requests', compact('requests'));
    }
}
