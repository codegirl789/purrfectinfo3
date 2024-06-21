<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('frontend.contact_create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
