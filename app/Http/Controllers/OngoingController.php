<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\craftsman;


class OngoingController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $requests = auth()->user()->requests;
        return view('requests/index', compact('requests'));
    }
    public function create(craftsman $craftsman)
    {
        $services = $craftsman->services;
        return view('requests/create', compact('services', 'craftsman'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'craftsman' => 'required',
            'service' => 'required',
            'description' => 'required',
            'location' => ['required', 'max:500'],
            'image' => ['required', 'image'],
        ]);


        $path = $request->image->store('uploads', 'public');

        \App\Models\request::create([
            'user_id' => $request['user'],
            'craftsman_id' => $request['craftsman'],
            'service_id' => $request['service'],
            'description' => $request['description'],
            'status' => 'pending',
            'location' => $request['location'],
            'image' => $path,
        ]);

        return redirect('requests');
    }
}
