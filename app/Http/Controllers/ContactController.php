<?php

namespace App\Http\Controllers;

use Mailgun\Mailgun;
use App\Models\Contact;
use Illuminate\Http\Request;
// use Illuminate\Mail\Transport\MailgunTransport;
// use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }


    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Verification des informations
        $request->validate(Contact::$storeRules);

        Contact::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'objet' => $request->objet,
            'message' => $request->message
        ]);

        // Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
        // {
        //     $message->subject('Mailgun and Laravel are awesome!');
        //     $message->from('no-reply@website_name.com', 'Website Name');
        //     $message->to('johndoe@gmail.com');
        // });


        $content = [
            'nom' => $request->nom,
            'email' => $request->email,
            'objet' => $request->objet,
            'message' => $request->message
        ];


        Mail::to($request->email)->send(new NotificationMail($content));

        dd('dsd');

        if (Mail::failures()) {
            return response()->Fail('Désolé');
        } else {
            return response()->success('Email envoyé avec success');
        }

        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
