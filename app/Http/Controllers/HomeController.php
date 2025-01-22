<?php

namespace App\Http\Controllers;

use App\Models\CompanyLink;
use App\Models\CompanySocialMedia;
use Illuminate\Http\Request;

class HomeController
{
    public function __invoke()
    {
        
        return view('pages.home', [
            'companyLinks' => CompanyLink::all(),
            'companySocialMedia' => CompanySocialMedia::all(),
        ]);
    }
}
