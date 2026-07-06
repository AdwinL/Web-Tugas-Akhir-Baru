<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();

        if (! $contact) {
            $contact = Contact::create([]);
        }

        return redirect()->route('admin.contacts.edit', $contact->id);
    }

    public function edit(Contact $contact)
    {
        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $data = $request->validate([
            'address' => 'nullable|string|max:500',
            'phone' => 'nullable|string|max:100',
            'email' => 'nullable|email|max:255',
            'map_url' => 'nullable|url|max:500',
            'instagram' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:100',
            'opening_hours' => 'nullable|string|max:255',
        ]);

        $contact->update($data);

        return back()->with('success', 'Contact information updated successfully.');
    }
}
