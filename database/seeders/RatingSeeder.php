<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $author_id = DB::table('authors')->pluck('id');
        $book_id = DB::table('books')->pluck('id');
        for ($i = 0; $i < 50000; $i++) {
            DB::table('ratings')->insert([
                'author_id' => $faker->randomElement($author_id),
                'book_id' => $faker->randomElement($book_id),
                'rate' => $faker->randomNumber($min=1, $max=10),
            ]);
        }
    }
}
