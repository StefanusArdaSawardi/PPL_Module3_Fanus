<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class displaynotestest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group display
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/Notes')
                    ->assertSee('Laravel');
        });
    }
}