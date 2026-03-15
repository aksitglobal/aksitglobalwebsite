<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email|max:120',
            'phone' => 'required|string|max:30',
            'message' => 'required|string|max:1500',
        ]);

        Contact::create($validated);

        return back()->with('success', 'Thank you! We will contact you shortly.');
    }
}
