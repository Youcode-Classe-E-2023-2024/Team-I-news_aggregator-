<?php
namespace App\Http\Controllers\AdminSide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SimpleXMLElement;
use App\Models\AdminSide\Rssdata;

class PromptController extends Controller
{
    public function trait_rss(Request $request)
    {
        // Validate the request
        $request->validate([
            'rssLink' => 'required|url',
        ]);

        // Fetch XML data from the RSS link
        $rssLink = $request->input('rssLink');
        $xmlData = file_get_contents($rssLink);

        // Parse XML data
        $xml = new SimpleXMLElement($xmlData);

        // Initialize an empty array to store transformed data
        $items = [];

        // Iterate over each item in the XML
        foreach ($xml->channel->item as $item) {
            // Extract relevant information from each item
            $title = (string)$item->title;
            $link = (string)$item->link;
            $description = (string)$item->description;
            $pubDate = (string)$item->pubDate;
            $image = isset($item->image) ? (string)$item->image : null;
            $creator = isset($item->children('dc', true)->creator) ? (string)$item->children('dc', true)->creator : null;
            $category = isset($item->category) ? (string)$item->category : null;

            // Push the extracted information into the items array
//            $items[] = compact('title', 'link', 'description', 'pubDate', 'image', 'creator', 'category');
            Rssdata::create([
                'title' => $title,
                'link' => $link,
                'description' => $description,
                'pubDate' => $pubDate,
                'image' => $image,
                'creator' => $creator,
                'category' => $category
            ]);
        }

        // Pass the transformed data to the view for rendering
//        return view('AdminSide.main', compact('items'));
        return redirect()->back()->with('success', 'RSS link stored successfully');
    }
}
