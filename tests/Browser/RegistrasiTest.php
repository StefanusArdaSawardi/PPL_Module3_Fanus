<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group regis
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
                    ->type('email',  'admin@gmail.com')
                    ->type('password', 'admin123')
                    ->press('REGISTER');
                    
        });
    }
}