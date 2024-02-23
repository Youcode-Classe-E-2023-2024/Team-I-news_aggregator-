<?php
namespace App\Http\Controllers\AdminSide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SimpleXMLElement;
use App\Models\AdminSide\Rsslist;

class PromptController extends Controller
{
    public function storeRss(Request $request)
    {
        // Validate the request
        $request->validate([
            'rssLink' => 'required|url',
        ]);

        // Fetch XML data from the RSS link
        $rssLink = $request->input('rssLink');

        Rsslist::create([
            'name' =>  $rssLink
        ]);

        return redirect()->route('adminDash')->with('success', 'RSS link stored successfully');
    }
}
