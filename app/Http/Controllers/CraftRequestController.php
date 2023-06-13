<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CraftRequestController extends Controller
{
    public function index()
    {
        $craftsman = auth()->user()->craftsman;
        if ($craftsman) {
            $requests = $craftsman->requests;
            return view('craftsman/requests', compact('requests'));
        } else {
            abort(404, 'You do not have access');
        }
    }

    public function update(Request $request)
    {
        $craftsman = auth()->user()->craftsman;

        if ($craftsman) {
            $data = $request->json()->all();
            $requestId = $data['request'];
            $selectedRequest = \App\Models\request::findOrFail($requestId);
            if ($data['action'] == "accept") {
                $selectedRequest->status = "accepted";
            } elseif ($data['action'] == "accept") {
                $selectedRequest->status = "declined";
            }
            $selectedRequest->save();
            return response('Success', 200)->header('Content-Type', 'text/plain');
        } else {
            return response('Unauthorized', 200)->header('Content-Type', 'text/plain');
        }
    }
}
