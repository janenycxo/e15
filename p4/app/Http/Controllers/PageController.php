<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Arr;
use Str;
use App\Restaurant;
use App\Location;


class PageController extends Controller
{
    /**
     * GET /
     */
    public function welcome(Request $request)
    {
        
        $searchTerms = session('searchTerms', null);
        $searchType = session('searchType', null);
        $searchResults = session('searchResults', null);

        $user = $request->user();

        return view('pages.welcome')->with([
            'userName' => $user->name ?? null,
            'searchTerms' => $searchTerms,
            'searchType' => $searchType,
            'searchResults' => $searchResults
        ]);
    }

    /**
     * GET /support
     */
    public function support()
    {
        return view('pages.support');
    }
}