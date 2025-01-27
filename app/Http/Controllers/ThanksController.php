<?php

namespace App\Http\Controllers;

use App\Models\CompanyLink;
use Illuminate\Http\Request;
use App\Models\CompanySocialMedia;

class ThanksController
{

    public function __invoke(Request $request)
    {
        return view('pages.thanks', [
            'companyLinks' => CompanyLink::all(),
            'companySocialMedia' => CompanySocialMedia::all(),
        ]);
    }
}
