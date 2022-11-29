<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Chrome;
use Tests\DuskTestCase;

class loginFeatureTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function test_basic_example()
    {
        $this->browse(function ($browser) {
            $browser->visit('/login')
                    ->type('email', 'admin@cbd.hu')
                    ->type('password', 'password')
                    ->press('Login')
                    ->assertPathIs('/tables');
        });
    }
}
