<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Restaurant;

class RestaurantUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', '=', 'jill@harvard.edu')->first();

        $restaurants = [
            'The Alcove',
            'Toms',
            'Raclette'
        ];

        foreach ($restaurants as $name) {
            $restaurant = Restaurant::where('name', '=', $name)->first();
            $user->restaurants()->save($restaurants, ['review' => 'I really enjoyed my visit '. $name]);
    }

    }
}