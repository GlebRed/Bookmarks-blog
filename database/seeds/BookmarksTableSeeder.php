<?php

use Illuminate\Database\Seeder;

class BookmarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Bookmark::class, 5)->create();
    }
}
