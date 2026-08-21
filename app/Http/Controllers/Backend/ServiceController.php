<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    // to get all data from database
    public function index()
    {
     $services = Service::all();
     dd($services);
    $service ="select * frome service";
    }
}
