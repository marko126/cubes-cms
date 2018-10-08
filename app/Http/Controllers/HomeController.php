<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndexSlide;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$indexSlides = IndexSlide::where('status', '=', IndexSlide::STATUS_ENABLED)
                ->orderBy('order_number')
                ->get();
	
        return view('front.home.index', [
            'indexSlides' => $indexSlides
        ]);
    }
}
