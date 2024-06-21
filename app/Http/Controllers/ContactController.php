<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('frontend.contact_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            ['name' => 'required'],
            ['email' => 'required|email'],
            ['message' => 'string|required|max:1000'],
        ]);

        Contact::create($request->all());

        toastr()->success('Message Sent Successfully!');

        return redirect()->back()->with('Message Sent Successfully!');
    }
}
