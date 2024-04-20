<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SearchController extends Controller
{
    public function showForm()
    {
        return view('search');
    }

    public function checkSearchPlatformResponse(Request $request)
    {
        $query = $request->input('query');
        $platforms = ['google', 'bing', 'duckduckgo']; // Define platforms to check

        $respondingPlatforms = [];
        $platformLinks = [];

        foreach ($platforms as $platform) {
            $platformUrl = $this->getPlatformUrl($platform);
            if (!$platformUrl) {
                continue;
            }

            $url = $platformUrl . urlencode($query);

            try {
                $response = Http::head($url);
                if ($response->ok()) {
                    $respondingPlatforms[] = $platform;
                    $platformLinks[$platform] = $url; // Store platform URL
                }
            } catch (\Exception $error) {
                Log::error("Error checking search platform $platform: {$error->getMessage()}");
            }
        }

        return redirect()->route('search')->with('respondingPlatforms', $respondingPlatforms)->with('platformLinks', $platformLinks);
    }



    private function getPlatformUrl($platform)
    {
        $platforms = [
            'google' => 'https://www.google.com/search?q=',
            'bing' => 'https://www.bing.com/search?q=',
            'duckduckgo' => 'https://duckduckgo.com/?q=',
            'sflix' => 'https://sflix.to/search/',
            'md' => 'https://moviekhhd.biz/search?ft=0&vt='
            // Add more platforms as needed
        ];

        return $platforms[$platform] ?? null;
    }
}
