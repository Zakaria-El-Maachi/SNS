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
        $requests = \App\Models\request::with('review')->whereHas('review')->where('craftsman_id', $craftsman->id)->get();
        if ($requests->isEmpty()) {
            return redirect('craftsmen')->with('error', 'No reviews have been written yet');
        }
        return view('reviews/index', compact('requests'));
    }

    public function create(\App\Models\request $request)
    {
        return view('reviews/create', compact('request'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'rating' => ['required', 'between:1,5', 'integer'],
            'description' => 'string',
            'request_id' => 'required',
        ]);
        $existingReview = review::where('request_id', $request->request_id)->exists();

        if ($existingReview) {
            return redirect('/dashboard')->with('error', 'A review already exists for this request.');
        }
        review::create([
            'request_id' => $request->request_id,
            'rating' => $request->rating,
            'description' => $request->description,
        ]);

        return redirect('/dashboard');
    }
}
