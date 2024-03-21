<?php

namespace Bitfumes\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Bitfumes\Contact\Mail\ContactMailable;
use Bitfumes\Contact\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact::contact');
    }

    public function send(Request $request): RedirectResponse
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
