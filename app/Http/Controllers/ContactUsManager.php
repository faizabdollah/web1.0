<?php

namespace App\Http\Controllers;

use App\Mail\notificationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ContactUsManager extends Controller
{
    function index() {
        return view('details');
    }

    function contactPost(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        // Pass data to the mailable if needed
        Mail::to('faizabdollah@gmail.com')->send(new notificationMail($request->all()));

        // Here you would typically save the data to the database or send an email

         // Save to produit_contact table
        DB::table('produit_contact')->insert([
            'nom' => $request->name,
            'mail_client' => $request->email,
            'tel' => $request->phone,
            'message' => $request->message,
            'date' => now(),
        ]);


        return redirect()->back()->with('session', 'Yo ur message has been sent successfully!');
    }
}
