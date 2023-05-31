<?php

namespace App\Http\Controllers;

use app\Models\craftsman;

class CraftsmenController extends Controller
{
    //

    public function index()
    {
        $craftsmen = craftsman::all();
        return view('craftsmen', compact('craftsmen'));
    }
}
