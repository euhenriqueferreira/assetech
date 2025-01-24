<?php

namespace App\Http\Controllers;

use App\Models\CompanyLink;
use Illuminate\Http\Request;
use App\Models\CompanySocialMedia;

class CompanyController extends GeneralController
{
    public function __invoke()
    {
        $testimonials = $this->getTestimonials();

        return view('pages.company', [
            'companyLinks' => CompanyLink::all(),
            'companySocialMedia' => CompanySocialMedia::all(),
            'testimonials' => $testimonials,
        ]);
    }
}
