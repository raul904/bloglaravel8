<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;



class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create('es_ES');
        
        $categories = Category::all();
        
        foreach ($categories as $category){
            
            for($i = 0; $i < rand(20,50); $i++) {
                Post::create([
                    'title' => $faker->sentence,
                    'content' => $faker->text(rand(300, 900)),
                    'category_id' => $category->id,
                    'user_id' => User::inRandomOrder()->first()->id,
                    
                ]);
            }
        }
    }
}
