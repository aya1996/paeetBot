<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Testimonail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $about = About::first();
        $sliders = Slider::get();
        $testimonails = Testimonail::get();
        $galleries = Gallery::get();
        return view('welcome',compact('about','sliders','galleries','testimonails'));
    }
}
