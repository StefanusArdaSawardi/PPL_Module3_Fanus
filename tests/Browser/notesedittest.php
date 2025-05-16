<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class notesedittest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editnotes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in')
                    ->assertSee('Email')
                    ->assertSee('Password')
                    ->type('email',  'stefanus.arda.s@gmail.com')
                    ->type('password', 'password')
                    ->press('LOG IN')

                    ->assertPathIs('/dashboard')
                    ->pause(1000) 
                    ->clickLink('Notes')
                    ->assertPathIs('/notes')
                    ->pause(500) 
                    ->clickLink('Edit')
                    ->assertSee('Title')
                    ->assertSee('Description')
                    ->type('title', 'PraktikumModul3')
                    ->type('description', 'kerenBanget')
                    ->press('UPDATE');
                }
            );
        }
}