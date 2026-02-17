<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
            'project_type' => 'nullable|string|max:100',
        ]);

        ContactSubmission::create($validated);

        return back()->with('success', 'Thank you for your enquiry. We will be in touch within 48 hours.');
    }
}
