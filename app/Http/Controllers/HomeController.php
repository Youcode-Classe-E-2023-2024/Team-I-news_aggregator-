<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminSide\RssItem;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Fetch RSS items from the database
        $rssItems = RssItem::all();

        // Pass the RSS items to the view
        return view('UserSide.home', compact('rssItems'));
    }
    public function tendance()
    {
        $rssItems = RssItem::latest()->take(10)->get();

// Pass the RSS items to the view
        return view('UserSide.tendance', compact('rssItems'));
    }
}
