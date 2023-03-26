<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\cattegory;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CattegorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 300; $i++) {
            DB::table('cattegories')->insert([
                'name' => $faker->text(10),
            ]);
        }
    }
}
