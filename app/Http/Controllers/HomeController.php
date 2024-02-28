<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminSide\RssItem;
use App\Models\Adminside\UserFavorite;


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
       // Get all RSS items
    $rssItems = RssItem::all();
    // Pass both sets of RSS items to the view
    return view('UserSide.home', compact('rssItems'));
    }

    public function newsDetail($id)
    {
        // Assuming RssItem model represents a news item
        $newsItem = RssItem::findOrFail($id);

        // Pass the news item to the view
        return view('UserSide.newsDetail', compact('newsItem'));
    }

    public function tendance()
    {
        $rssItems = RssItem::latest()->take(10)->get();

// Pass the RSS items to the view
        return view('UserSide.tendance', compact('rssItems'));
    }
}
