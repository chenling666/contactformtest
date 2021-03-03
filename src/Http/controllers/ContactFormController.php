<?php

namespace Chenl\Contactform\Http\controllers;


use App\Http\Controllers\Controller;
use Chenl\Contactform\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{

    public function index()
    {
        return view('contactform::contact');
    }

    public function sendMail(Request $request)
    {
        //ContactForm::create($request->all());
        ContactForm::create($request->all());

        return redirect(route('contact'))->with(['message' => 'Tank you, your mail has been sent successfully.']);
    }
}
