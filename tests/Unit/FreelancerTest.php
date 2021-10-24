<?php

namespace Tests\Unit;

use App\Models\Freelancer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class FreelancerTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function freelancer_has_path()
    {
        $freelancer = Freelancer::factory()->create();
        $this->assertEquals('/freelancers/' . $freelancer->id, $freelancer->path());
        $this->assertTrue(true);
    }

}
