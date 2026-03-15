<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class PageController extends Controller
{
    public function home()
    {
        $testimonials = Cache::remember('home_testimonials', 3600, fn () => [
            ['name' => 'Aamir Khan', 'quote' => 'AKSIT transformed our network infrastructure and uptime.'],
            ['name' => 'Sadia Noor', 'quote' => 'Their training center prepared me for CCNP with confidence.'],
            ['name' => 'Hassan Raza', 'quote' => 'Professional development team and great post-launch support.'],
        ]);

        return view('pages.home', compact('testimonials'));
    }

    public function about() { return view('pages.about'); }
    public function services() { return view('pages.services'); }
    public function training() { return view('pages.training'); }
    public function careers() { return view('pages.careers'); }
    public function contact() { return view('pages.contact'); }
}
