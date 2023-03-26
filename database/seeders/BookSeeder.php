<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\book;
use App\Models\cattegory;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $cattegory_id = DB::table('cattegories')->pluck('id');
        $author_id = DB::table('authors')->pluck('id');
        for ($i = 0; $i < 10000; $i++) {
            DB::table('books')->insert([
                'name' => $faker->name(),
                'cattegory_id' => $faker->randomElement($cattegory_id),
                'author_id' => $faker->randomElement($author_id),
            ]);
        }
    }
}
