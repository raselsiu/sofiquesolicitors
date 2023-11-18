<?php

namespace App\Http\Controllers\frontend\pages;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\ContactForm;
use App\Models\Fee;
use App\Models\Introvideo;
use App\Models\Overview;
use App\Models\Service;
use App\Models\Sitepost;
use App\Models\Testimonial;
use App\Models\Youtubesvideo;
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
        // Fee
        $fees = Fee::first();
        // Testimonial
        $testimonials = Testimonial::all();
        // $Posts
        $posts = Sitepost::all();
        return view('index',compact('banner','overviews','services','intros','fees','testimonials','posts'));
    }


    public function youtubeVideos()
    {
        $yts = Youtubesvideo::all();
        return view('frontend.pages.youtube',compact('yts'));
    }


}
