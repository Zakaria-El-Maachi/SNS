<?php

namespace App\Http\Controllers;

use App\Models\craftsman;

class CraftsmenController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $craftsmen = craftsman::all();
        return view('craftsmen', compact('craftsmen'));
    }
}
