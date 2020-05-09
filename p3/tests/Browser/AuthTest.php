<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;


class AuthTest extends DuskTestCase
{

public function testDatabase()
    {
        $this->assertDatabaseHas('users', [
                'email' => 'jill@harvard.edu',
                'name' => 'Jill Harvard',
        ]);
    }

}

