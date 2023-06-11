<?php

namespace App\Http\Controllers;

use App\Models\craftsman;
use Illuminate\Http\Request;

class FinishedController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(craftsman $craftsman)
    {
        $reviews = $craftsman->requests;
        return view('reviews/index', compact('reviews'));
    }
}
