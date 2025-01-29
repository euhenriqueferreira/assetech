<?php

namespace App\Http\Controllers;

use App\Models\CompanyLink;
use Illuminate\Http\Request;
use App\Models\CompanySocialMedia;

class ServicesController extends GeneralController
{
    public function __invoke()
    {
        $testimonials = $this->getTestimonials();
        $services = $this->getArticle('Article Service', true);

        return view('pages.services', [
            'companyLinks' => CompanyLink::all(),
            'companySocialMedia' => CompanySocialMedia::all(),
            'testimonials' => $testimonials,
            'services' => $services
        ]);
    }
}
