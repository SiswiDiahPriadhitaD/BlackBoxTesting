<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminTypesEditTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_admintypesedit()
    {
        $response = $this->get('/admin/type/edit');

        $response->assertStatus(200);
    }
}
