<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        //      Service::create([
        //     'service_name'      =>'House Clean ',
        //     'service_slug'      =>'office-clean',
        //     'service_image'     =>'public/frontend/assets/img/service/service-img-3-1.jpg',
        //     'service_icon'      =>'fa fa-clean',
        //     'short_description' =>'this is our first static description',
        //     'long_description'  =>'this is our first static long description',
        // ]);
        $services = Service::all();
        return view('frontend.home',compact('services'));
    }
}
