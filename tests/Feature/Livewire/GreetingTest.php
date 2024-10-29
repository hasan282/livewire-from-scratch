<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Greeting;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class GreetingTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Greeting::class)
            ->assertStatus(200);
    }
}
