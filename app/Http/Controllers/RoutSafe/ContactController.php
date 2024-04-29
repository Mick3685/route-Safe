<?php

namespace App\Http\Controllers\RoutSafe;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('RouteSafe.Contact.index');

    }

    public function store(Request $request)

      {  $contact = new Contact();
        $contact->name = $request->input('con_name');
        $contact->email = $request->input('con_email');
        $contact->contact = $request->input('con_contact');
        $contact->subject = $request->input('con_subject');
        $contact->message = $request->input('message');
        $contact->save();
        
        return redirect()->route('contact.index')->with('success', 'Votre message a été envoyé avec succès.');        
        
    }
        
    
}
