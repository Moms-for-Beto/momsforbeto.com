<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use GuzzleHttp\Exception\ClientException;

class SearchController extends Controller
{
    public function __invoke(Request $request) {
        $query = $request->input('query');

        $results = null;
        if (Str::length($query) > 0) {
            try {
                $results = $this->lookup($query);
            } catch (ClientException $e) {
                $results = null;
            }

            if ($results && count($results) <= 0) {
                $results = null;
            }
        }

        return view('search', ['results' => $results]);
    }

    private function lookup(string $query) {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.geocod.io/v1.3/geocode', [
            'query' => [
                'q' => $query,
                'api_key' => config('services.geocodio.api_key'),
                'fields' => 'cd',
                'limit' => 3
            ]
        ]);

        $json = json_decode($response->getBody());

        return $json->results ?? null;
    }
}
