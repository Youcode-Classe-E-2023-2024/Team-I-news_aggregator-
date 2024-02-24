<?php
namespace App\Http\Controllers\AdminSide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SimpleXMLElement;
use Illuminate\Support\Facades\Http;
use App\Models\AdminSide\Rsslist;
use App\Models\AdminSide\RssItem;

class PromptController extends Controller
{
    public function storeRss(Request $request)
    {
        $request->validate([
            'rssLink' => 'required|url',
        ]);

        $rssLink = $request->input('rssLink');

        // Check if the RSS link already exists in the rsslist table
        $existingRss = Rsslist::where('name', $rssLink)->first();
        if ($existingRss) {
            return redirect()->back()->with('error', 'RSS link already exists 🤷‍♀️');
        }

        try {
            // Attempt to fetch XML data from the RSS link
            $response = Http::get($rssLink);

            // Check if the response status is not successful
            if (!$response->successful()) {
                throw new \Exception('Failed to fetch XML data from the RSS link');
            }

            $newRssLink = Rsslist::create([
                'name' => $rssLink
            ]);

            // Parse XML data
            $xmlData = $response->body();
            $xml = new SimpleXMLElement($xmlData);

            // Iterate over each item in the XML and store in the 'rss_items' table
            foreach ($xml->channel->item as $item) {
                $title = (string) $item->title;
                $link = (string) $item->link;
                $description = (string) $item->description;
                $category = isset($item->category) ? (string) $item->category : null;

                RssItem::create([
                    'rss_id' => $newRssLink->id,
                    'title' => $title,
                    'link' => $link,
                    'description' => $description,
                    'category' => $category
                ]);
            }

            return redirect()->route('adminDash')->with('success', 'RSS items stored successfully 👍');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to store RSS items: ' . $e->getMessage());
        }
    }
}
