<?php

namespace Tests\Feature;

use App\Models\Freelancer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FreelancerTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function test_homepage()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /** @test */
    public function create_freelancer_page()
    {
        $response = $this->get('/freelancers/create');
        $response->assertStatus(200);
    }

    /** @test */
    public function newly_inserted_freelance_is_visible()
    {
        $attributes = Freelancer::factory()->raw();
        $this->post('/freelancers', $attributes);
        $this->get('/freelancers')->assertSee($attributes['email']);
    }

    /** @test */
    public function a_profile_requires_name()
    {
        $attributes = Freelancer::factory()->raw(['name' => '']);
            $this->post('/freelancers', $attributes)->assertSessionHasErrors('name');
    }

    /** @test */
    public function a_profile_requires_rate()
    {
        $attributes = Freelancer::factory()->raw(['rate' => '']);
            $this->post('/freelancers', $attributes)->assertSessionHasErrors('rate');
    }

    /** @test */
    public function a_profile_should_be_numeric_rate()
    {
        $attributes = Freelancer::factory()->raw(['rate' => 'x']);
            $this->post('/freelancers', $attributes)->assertSessionHasErrors('rate');
    }

    /** @test */
    public function a_profile_require_currency()
    {
        $attributes = Freelancer::factory()->raw(['currency' => '']);
            $this->post('/freelancers', $attributes)->assertSessionHasErrors('currency');
    }
}
