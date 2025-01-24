<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\CompanyLink;
use App\Models\CompanySocialMedia;
use Illuminate\Http\Request;

class HomeController extends GeneralController
{
    public function __invoke()
    {
        $bannerTop = $this->getBanner('Banner Top');
        $bannersServices = $this->getBanner('Banner Services', true);
        $articleOurHistory = $this->getArticle('Article Our History Home');
        $testimonials = $this->getTestimonials();

        return view('pages.home', [
            'companyLinks' => CompanyLink::all(),
            'companySocialMedia' => CompanySocialMedia::all(),
            'bannerTop' => $bannerTop,
            'bannersServices' => $bannersServices,
            'testimonials' => $testimonials,
            'articleOurHistory' => $articleOurHistory,
        ]);
    }
}
