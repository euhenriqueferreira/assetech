<?php

namespace App\Http\Controllers;

use App\Models\Banner;
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
}
