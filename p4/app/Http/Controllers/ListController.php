<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
/**
     * GET /list
     */
    public function show(Request $request)
    {
        $restaurants = $request->user()->restaurants->sortByDesc('pivot.created_at');

        return view('lists.show')->with(['restaurants' => $restaurants]);
    }

    /**
     * GET /list/{slug?}/add
     */
    public function add($slug)
    {
        $restaurant =Restaurants::findBySlug($slug);

        # TODO: Handle case where restaurant isn't found for the given slug

        return view('lists.add')->with(['restaurant' => $restaurant]);
    }

    /**
     * POST /list/{slug?}/add
     */
    public function save(Request $request, $slug)
    {
        # TODO: Validate incoming data, making sure they entered a note

        $restaurant = Restaurant::findBySlug($slug);

        # Add Restaurant to user's list
        # (i.e. Create a new row in the eateries_user table)
        $request->user()->restaurants()->save($restaurant, ['notes' => $request->notes]);

        return redirect('/list')->with([
            'flash-alert' => 'The restaurant ' .$restaurant->name. ' was added to your list.'
        ]);
    }
}
