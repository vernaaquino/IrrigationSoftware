<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     
     * @return void
     */
    public function run()
    {
        Schedule::factory()
            ->count(3)
            ->create();
    }
}
