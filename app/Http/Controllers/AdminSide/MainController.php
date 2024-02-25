<?php

namespace App\Http\Controllers\AdminSide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminSide\RssItem;
use App\Models\AdminSide\Rsslist;

class MainController extends Controller
{
    public function adminDash() {
        return view('AdminSide.main');
    }

    // for flowchart usage
    public function rssLists() {
        $rssLists = Rsslist::withCount('rssItems')->get();
        return response()->json($rssLists);
    }
}
