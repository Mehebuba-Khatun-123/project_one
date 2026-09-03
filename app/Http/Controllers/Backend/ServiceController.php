<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class serviceController extends Controller
{
    public function index()
    {
        // $service = Service::orderBy('service_name','asc')->latest()->limit(10)->get();
        $service = Service::where('service_name','Eius Illum')->get(['service_name','service_slug']);
        
    } 
    public function store(Request $request)
    {
        Service::create([
            'service_name' =>$request->name,
            'service_slug'  =>$request->slug,
            'service_image' =>$request->image,
            'service_icon'  =>$request->icon,
            'short_description'  =>$request->short_description,
            'long_description'  =>$request->long_description,
            'status'          =>$request->status,
                
        ]);
    }
}
