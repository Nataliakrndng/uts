<?php

use Illuminate\Database\Seeder;
use Database\Seeders\BookSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(BookSeeder::class);
    }
}
