<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Restaurant;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
public function run()
{
    $user = User::updateOrCreate(
        ['email' => 'jill@harvard.edu', 'name' => 'Jill Harvard'],
        ['password' => Hash::make('helloworld')
    ]);
    
    $user = User::updateOrCreate(
        ['email' => 'jamal@harvard.edu', 'name' => 'Jamal Harvard'],
        ['password' => Hash::make('helloworld')
    ]);


    $user = User::updateOrCreate(
        ['email' => 'jay213@g.harvard.edu', 'name' => 'Jane Yeh'],
        ['password' => Hash::make('helloworld')
    ]);

}
}
