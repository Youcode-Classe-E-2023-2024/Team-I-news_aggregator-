<?php
namespace App\Http\Controllers\AdminSide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SimpleXMLElement;

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

            // Push the extracted information into the items array
            $items[] = compact('title', 'link', 'description', 'pubDate', 'image');
        }

        // Pass the transformed data to the view for rendering
        return view('AdminSide.main', compact('items'));
    }
}
