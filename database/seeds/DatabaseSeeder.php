<?php

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
        //$this->call(CategorySeeder::class);
        factory(App\Category::class, 10)->create();
        factory(App\Product::class, 10)->create();
        factory(App\User::class, 10)->create();
    }
}
