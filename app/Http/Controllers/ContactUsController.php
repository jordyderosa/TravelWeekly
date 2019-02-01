<?php

namespace App\Http\Controllers;

use App\ContactForm;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function show(){
        return view('ContactUs');
    }

    public function store(Request $request){


            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required'
                ]);

            ContactForm::create($request->all());

            return view('ContactUs')->with('console','Thanks for contacting us. Ad operator will answer you as soon as possible.');
    }
}
