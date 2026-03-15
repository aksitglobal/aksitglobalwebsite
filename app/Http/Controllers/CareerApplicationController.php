<?php

namespace App\Http\Controllers;

use App\Models\CareerApplication;
use Illuminate\Http\Request;

class CareerApplicationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email|max:120',
            'phone' => 'required|string|max:30',
            'position' => 'required|string|max:120',
            'cover_letter' => 'required|string|max:2000',
        ]);

        CareerApplication::create($validated);

        return back()->with('success', 'Application submitted successfully.');
    }
}
