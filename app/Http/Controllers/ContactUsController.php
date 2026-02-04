<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Models\WebmasterSection;


class ContactUsController extends Controller
{
    public function contact_us()
    {
        return view('frontend.contact_us');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'phone' => 'nullable|string',
            'city' => 'nullable|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        ContactUs::create($validated);

        return back()->with('success', 'Message envoyé avec succès!');
    }


    public function contacts_form()
    {
        $contacts = ContactUs::orderBy('created_at', 'desc')->paginate(10);
        $GeneralWebmasterSections = WebmasterSection::where('status', 1)->get();
        
        return view('dashboard.contacts_us_form', compact('contacts', 'GeneralWebmasterSections'));
    }
    
    
}
