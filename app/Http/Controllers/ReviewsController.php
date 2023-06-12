<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\craftsman;
use \App\Models\review;


class ReviewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(craftsman $craftsman)
    {
        $requests = $craftsman->requests()->with('review')->get();
        return view('reviews/index', compact('requests'));
    }

    public function create(\App\Models\request $request)
    {
        return view('reviews/create', compact('request'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'rating' => ['required', 'between:1,5', 'numeric'],
            'description' => 'text',
            'request_id' => 'required',
        ]);
        $existingReview = review::where('request_id', $request->request_id)->exists();

        if ($existingReview) {
            return redirect()->back()->with('error', 'A review already exists for this request.');
        }
        review::create([
            'request_id' => $request['user'],
            'rating' => $request['craftsman'],
            'description' => $request['service'],
        ]);

        return redirect('/requests');
    }
}
