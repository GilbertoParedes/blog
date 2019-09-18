<?php

use Illuminate\Database\Seeder;
use Factories\PageFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PageTypesTableSeeder::class);
        $this->call(PagesTableSeeder::class);
    }
}
