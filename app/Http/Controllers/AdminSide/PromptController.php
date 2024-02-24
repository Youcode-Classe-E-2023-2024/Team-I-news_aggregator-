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

        return redirect()->route('adminDash')->with('success', 'RSS link stored successfully 👍');
    }

    public function showRssItemsStatic()
    {
        // Static data for frontend development purposes
        $items = [
            (object)[
                'title' => 'Sample News Item 1',
                'description' => 'This is a short description of the first news item.',
                'pubDate' => '2024-02-23',
                'image' => 'https://picsum.photos/seed/picsum/400/300',
            ],
            (object)[
                'title' => 'Sample News Item 2',
                'description' => 'This is a short description of the second news item.',
                'pubDate' => '2024-02-24',
                'image' => 'https://picsum.photos/seed/picsum/400/300',
            ],
            // Add more items as needed
        ];
    
        return view('AdminSide.rss-items', compact('items'));
    }

    public function rssItemDetails($id)
{
    $item = Rsslist::findOrFail($id);
    return view('AdminSide.rss-item-details', compact('item'));
}

    

}
