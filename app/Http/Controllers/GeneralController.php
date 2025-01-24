<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Banner;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GeneralController extends Controller
{
    public function getBanner($bannerName, $bannerGroup = false){
        if($bannerGroup){
            return Banner::query()->where('group', '=', $bannerName)->get();
        }
        return Banner::query()->where('name', '=', $bannerName)->first();
    }

    public function getArticle($articleName, $articleGroup = false){
        if($articleGroup){
            return Article::query()->where('group', '=', $articleName)->get();
        }
        return Article::query()->where('name', '=', $articleName)->first();
    }


    public function getTestimonials(){
        return Testimonial::all();
    }
}
