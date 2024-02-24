<?php
namespace App\Http\Controllers\AdminSide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SimpleXMLElement;
use Illuminate\Support\Facades\Http;
use App\Models\AdminSide\Rsslist;
//use App\Models\AdminSide\RssItem;

class PromptController extends Controller
{
    public function storeRss(Request $request)
    {
        $request->validate([
            'rssLink' => 'required|url',
        ]);

        $rssLink = $request->input('rssLink');

        try {
            // Attempt to fetch XML data from the RSS link
            $response = Http::get($rssLink);

            // Check if the response status is not successful
            if (!$response->successful()) {
                throw new \Exception('Failed to fetch XML data from the RSS link');
            }

            // storing the rsslink into 'rsslist' table
            Rsslist::create([
                'name' => $rssLink
            ]);

            // storing the rsslink items into 'rss_items' table
            $xmlData = file_get_contents($rssLink);

            $xml = new SimpleXMLElement($xmlData);

            $items = [];

            // Iterate over each item in the XML
            foreach ($xml->channel->item as $item) {
                // Extract relevant information from each item
                $title = (string)$item->title;
                $link = (string)$item->link;
                $description = (string)$item->description;

            }


            return redirect()->route('adminDash')->with('success', 'RSS link stored successfully 👍');
        } catch (\Exception $e) {
            // Handle the exception by returning a session message
            return redirect()->back()->with('error', 'Invalid RSS link');
        }
    }


    public function displayRssItems() {

    }
}
