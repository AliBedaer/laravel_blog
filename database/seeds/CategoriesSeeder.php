<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::insert([
            ['title'=>"Web development","created_at"=>now()],
            ['title'=>"Mobile","created_at"=>now()],
            ['title'=>"Database","created_at"=>now()]
        ]);
    }
}
