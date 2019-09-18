<?php

use Illuminate\Database\Seeder;
use App\Cms\Pages\PageType;

class PageTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $types = [
            [
                'name' => 'home',
            ],
            [
                'name' => 'default',
            ],
            [
                'name' => 'blog',
            ],
            [
                'name' => 'info',
            ]
        ];

        PageType::insert($types);

    }
}
