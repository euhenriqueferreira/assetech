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
        $ourResumeWithoutFormat = $this->getArticle('Article Our Resume Company');
        $ourResume = explode('<br/>', $ourResumeWithoutFormat->content);

        $ourMission = $this->getArticle('Article Our Mission Company');
        $ourHistory = $this->getBanner('Banner Our History');

        return view('pages.company', [
            'companyLinks' => CompanyLink::all(),
            'companySocialMedia' => CompanySocialMedia::all(),
            'testimonials' => $testimonials,
            'ourResume' => $ourResume,
            'ourMission' => $ourMission,
            'ourHistory' => $ourHistory,
        ]);
    }
}
