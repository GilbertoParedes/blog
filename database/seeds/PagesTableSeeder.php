<?php

use Illuminate\Database\Seeder;
use App\Cms\Pages\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Page::class, 40)->create();
    }
}
