<?php

namespace App\Http\Controllers\Site;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class GalleryController extends Controller
{

    public function index()
    {
        $galleries = Gallery::get();
        return view('site.galleries.index',compact('galleries'));
    }
}
