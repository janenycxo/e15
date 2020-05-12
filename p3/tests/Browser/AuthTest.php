<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;


class AuthTest extends DuskTestCase
{
/**
public function testDatabase()
    {
        $this->assertDatabaseHas('users', [
                'email' => 'jill@harvard.edu',
                'name' => 'Jill Harvard',
        ]);
    }
*/
}

//Note:
//For example, on our Add a book page, not only would I test that a book could be successfully added, I would also test/assert that validation is working on at least one field. However, I would not go beyond that to test each individual field validation.
//Similarly, on the Show a book page, I would test that given a certain slug, the appropriate book is loaded on the page. To assert this, I would look for something important - like the book title - but I would not feel it necessary to confirm every single book detail is there (e.g. description, image, published date, etc.).