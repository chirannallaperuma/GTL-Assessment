<?php

namespace Tests\Feature;

use App\Models\LastRun;
use App\Models\Runner;
use Tests\TestCase;

class RunnerTest extends TestCase
{
    /**
     * Test endpoint success
     */
    public function testFormDataApiSuccess()
    {
        Runner::truncate();
        Runner::factory()->count(15)->create();

        $headers['Accept'] = 'application/json';

        $response = $this->get('/api/v1/runner/1/form-data', $headers);

        $response->assertStatus(200);
    }

    /**
     * Test endpoint all data
     */
    public function testAllData()
    {
        Runner::truncate();
        Runner::factory()->count(15)->create();

        $headers['Accept'] = 'application/json';

        $response = $this->get('/api/v1/runner/1/form-data', $headers);

        $response->assertStatus(200)->assertJsonStructure(['success', 'data', 'status']);
    }

    /**
     * Test endpoint last runs data
     */
    public function testLastRuns()
    {
        LastRun::truncate();
        LastRun::factory()->count(30)->create();

        $headers['Accept'] = 'application/json';

        $response = $this->get('/api/v1/runner/1/form-data', $headers);

        $response->assertStatus(200)->assertJsonStructure(['success', 'data' => ['last_runs'], 'status']);
    }
}
