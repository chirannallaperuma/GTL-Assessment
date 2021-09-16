<?php

namespace Database\Seeders;

use App\Models\LastRun;
use App\Models\Runner;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Runner::factory(15)->create();
        LastRun::factory(30)->create();
    }
}
