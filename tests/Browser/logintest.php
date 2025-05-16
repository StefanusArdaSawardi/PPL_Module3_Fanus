<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class logintest extends DuskTestCase
{
    /**
     * @group login
     *
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in')
                    ->assertSee('Email')
                    ->assertSee('Password')
                    ->type('email',  'stefanus.arda.s@gmail.com')
                    ->type('password', '1202220005')
                    ->press('LOG IN');
                }
            );
        }
}
