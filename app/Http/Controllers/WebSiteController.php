<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\HomeContent;
use Illuminate\Contracts\View\View;

class WebSiteController extends Controller
{
    public function homeContent(): View
    {
        $details = HomeContent::select('slogan', 'categories', 'logo_text', 'image')->first();

        $categoriesText = HomeContent::select('categories')->first(); // will return instance model not string
        $categoriesArray = explode(",", $categoriesText->categories); // get the string itself 

        $about = About::select('title', 'about_me', 'linkedin', 'github', 'whatsapp')->first();
        
        return view('website.index', compact('details', 'categoriesArray', 'about'));
    }

    public function projects(): View
    {


        return view('website.projects');
    }

    public function resume(): View
    {


        return view('website.resume');
    }

    public function contact(): View
    {


        return view('website.resume');
    }
}
