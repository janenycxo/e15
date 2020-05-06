<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

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
     */
    public function add($cuisine)
    {
        $restaurant =Restaurants::findByCuisine($cuisine);
        return view('lists.add')->with(['restaurant' => $restaurant]);
    }

    /**
     * POST
     */
    public function save(Request $request, $cuisine)
    {
        # TODO: Validate incoming data, making sure they entered a note

        $restaurant = Restaurant::findByLocation($location);

        # Add Restaurant to user's list
        # (i.e. Create a new row in the eateries_user table)
        $request->user()->restaurants()->save($restaurant, ['notes' => $request->notes]);

        return redirect('/list')->with([
            'flash-alert' => 'The restaurant ' .$restaurant->name. ' was added to your list.'
        ]);
    }
}