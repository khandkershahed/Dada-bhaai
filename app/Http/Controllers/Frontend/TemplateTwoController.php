<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\HomePage;

class TemplateTwoController extends Controller
{
    //Index
    public function Index()
    {
        $videos = HomePage::where('status', '1')->latest()->get();

        return view('frontend.astell.index_astell');

    }
}
