<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Geocodio\Exceptions\GeocodioException;
use Geocodio\Geocodio;

class SearchController extends Controller
{
    public function __invoke(Request $request, Geocodio $geocoder) {
        $query = $request->input('query');

        $results = null;
        if (Str::length($query) > 0) {
            try {
                $results = $geocoder->geocode($query, ['cd'], 3);
                $results = $results->results ?? null;
            } catch (GeocodioException $e) {
                info($e->getMessage());
                $results = null;
            }

            if ($results && count($results) <= 0) {
                $results = null;
            }
        }

        return view('search', ['results' => $results]);
    }
}
