<?php

namespace App\Http\Controllers;

use App\Models\Recipient;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Notifications\ContactFormMessage;

class ContactController extends Controller
{
    public function show()
 {
  return view('frontend.contact');
 }
public function mailContactForm(ContactFormRequest $message, Recipient $recipient)
 {      
  $recipient->notify(new ContactFormMessage($message));
  
  return redirect()->back()->with('message', 'Thanks for your message! We will get back to you soon!');
 }
}
