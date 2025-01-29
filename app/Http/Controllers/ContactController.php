<?php

namespace App\Http\Controllers;

use App\Models\CompanyLink;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Models\CompanySocialMedia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;

class ContactController
{

    public function __invoke(Request $request)
    {
        return view('pages.contact', [
            'companyLinks' => CompanyLink::all(),
            'companySocialMedia' => CompanySocialMedia::all(),
        ]);
    }

    public function handleSubmitContactForm(ContactFormRequest $request){
        $data = $request->validated();

        DB::table('contact_messages_received')->insert([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'uf' => $data['uf'],
            'city' => $data['city'],
            'message' => $data['message']
        ]);


        Mail::to('ecomercial@assetech.com.br')->send(new ContactFormMail($data));

        return to_route('pages.thanks');
    }
}
