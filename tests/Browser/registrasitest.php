<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class registrasitest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group registrasi
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Register')
                    ->assertSee('Name')
                    ->assertSee('Email')
                    ->assertSee('Password')
                    ->assertSee('Confirm Password')
                    ->type('email',  'stefanus.arda.s@gmail.com')
                    ->type('password', '1202220005')
                    ->press('REGISTER');
                }
            );
        }
}