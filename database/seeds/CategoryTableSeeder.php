<?php

use Illuminate\Database\Seeder;

use App\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Web Development',
            'slug'=>str_slug('Web Development'),//WEb Dev => web-dev
        ]);
    }
}
