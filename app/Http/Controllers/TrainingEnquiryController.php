<?php

namespace App\Http\Controllers;

use App\Models\TrainingEnquiry;
use Illuminate\Http\Request;

class TrainingEnquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email|max:120',
            'phone' => 'required|string|max:30',
            'program' => 'required|string|max:120',
            'message' => 'nullable|string|max:1500',
        ]);

        TrainingEnquiry::create($validated);

        return back()->with('success', 'Enrollment inquiry received successfully.');
    }
}
