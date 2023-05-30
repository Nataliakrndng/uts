<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Create sample books
        for ($i = 0; $i < 20; $i++) {
            $isSeries = $faker->boolean;
            $highlightCount = $isSeries ? 0 : $faker->numberBetween(1, 10);

            $book = new Book();
            $book->title = $faker->sentence(3);
            $book->description = $faker->paragraph;
            $book->highlight_count = $highlightCount;
            $book->is_series = $isSeries;
            $book->image = $faker->imageUrl();
            $book->save();
        }
    }
}
