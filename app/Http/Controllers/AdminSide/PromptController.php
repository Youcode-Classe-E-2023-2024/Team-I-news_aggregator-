<?php

namespace App\Http\Controllers\AdminSide;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;
use SimpleXMLElement;

class PromptController extends Controller
{
    public function store()
    {
        // Validate the request
        $validator = Validator::make(request()->all(), [
            'rss_link' => 'required|url',
        ]);

        if ($validator->fails()) {
            return abort(404, 'URL is not valid');
        }

        // Get the RSS link from the request
        $rssLink = request()->input('rss_link');

        try {
            // Fetch the XML content from the RSS link
            $response = Http::get($rssLink);
            $xmlData = $response->body();

            // Parse the XML content
            $xml = new SimpleXMLElement($xmlData);
            $items = [];

            foreach ($xml->channel->item as $item) {
                $items[] = [
                    'title' => (string)$item->title,
                    'link' => (string)$item->link,
                    'description' => (string)$item->description,
                    'pubDate' => (string)$item->pubDate,
                    'image' => isset($item->enclosure['url']) ? (string)$item->enclosure['url'] : null,
                ];
            }

            // Render the parsed content in the view
            return view('AdminSide.prompt-section', compact('items'));
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Failed to parse RSS feed.'])->withInput();
        }
    }
}
