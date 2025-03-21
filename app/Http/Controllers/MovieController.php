<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query', 'Avengers'); // Default search term
        $apiKey = env('OMDB_API_KEY');
        $url = "http://www.omdbapi.com/?s={$query}&apikey={$apiKey}";

        $response = Http::get($url);

        if ($response->failed() || isset($response->json()['Error'])) {
            return back()->with('error', 'Movie not found or API error.');
        }

        $movies = $response->json()['Search'] ?? [];

        return view('movies.index', compact('movies', 'query'));
    }

    public function details($id)
    {
        $apiKey = env('OMDB_API_KEY');
        $url = "http://www.omdbapi.com/?i={$id}&apikey={$apiKey}";

        $response = Http::get($url);

        if ($response->failed() || isset($response->json()['Error'])) {
            return back()->with('error', 'Movie details not found.');
        }

        $movie = $response->json();

        return view('movies.details', compact('movie'));
    }
}
