<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Tip;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Version;
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

        $randTips = rand(5,20);

        User::factory(100)->has(Tip::factory()->count($randTips))->create();
        Brand::factory(20)->create();
        Vehicle::factory(50)->create();
        Version::factory(80)->create();
    }
}
