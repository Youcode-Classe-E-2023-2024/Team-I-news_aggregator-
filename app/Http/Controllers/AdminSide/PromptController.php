<?php
namespace App\Http\Controllers\AdminSide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SimpleXMLElement;
use App\Models\AdminSide\Rsslist;
use Illuminate\Support\Facades\Http;

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

        try {
            // Attempt to fetch XML data from the RSS link
            $response = Http::get($rssLink);

            // Check if the response status is not successful
            if (!$response->successful()) {
                throw new \Exception('Failed to fetch XML data from the RSS link');
            }

            // If successful, create the Rsslist entry
            Rsslist::create([
                'name' => $rssLink
            ]);

            return redirect()->route('adminDash')->with('success', 'RSS link stored successfully 👍');
        } catch (\Exception $e) {
            // Handle the exception by returning a session message
            return redirect()->back()->with('error', 'Invalid RSS link');
        }
    }
}
