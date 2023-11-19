<?php

namespace App\Http\Controllers\frontend\pages;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Fee;
use App\Models\Introvideo;
use App\Models\Overview;
use App\Models\Service;
use App\Models\Sitepost;
use App\Models\Testimonial;
use App\Models\Youtubesvideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


    public function blogs()
    {
        $posts = Sitepost::paginate(1);
        return view('frontend.pages.posts.blog',compact('posts'));
    }

    public function blogSingleViewPage($id)
    {
        $decoded_ID = base64_decode($id);
        $post = Sitepost::find($decoded_ID);
        // Recent Post
        $recentPost = Sitepost::latest()->take(3)->get();

        // Post Category

        $categoryList = Category::all();


        return view('frontend.pages.posts.blog_single',compact('post','recentPost','categoryList'));
    }

    public function categoryWiseSingleView($id)
    {


         $posts = DB::table('siteposts')
        ->join('categories','categories.id','=','siteposts.category_id')
        ->where('category_id', $id)
        ->get();

        // $posts = DB::table('siteposts')->where('category_id', $id)->get();
        return view('frontend.pages.posts.blog',compact('posts'));
    }


       public function searchPosts(Request $request){

        $search = $request->input('search');

        $posts = Sitepost::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();


        return view('frontend.pages.posts.blog',compact('posts'));

       }


}
