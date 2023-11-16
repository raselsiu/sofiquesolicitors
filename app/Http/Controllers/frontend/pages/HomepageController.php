<?php

namespace App\Http\Controllers\frontend\pages;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Introvideo;
use App\Models\Overview;
use App\Models\Service;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
 
    public function index()
    {
        // Banner
        $banner = Banner::first();
        // Overview Data
        $overviews = Overview::all();
        // Services
        $services = Service::all();
        // Intro Video
        $intros = Introvideo::first();
        
        return view('index',compact('banner','overviews','services','intros'));
    }



}
