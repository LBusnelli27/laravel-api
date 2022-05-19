<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->words(3, true);
            $newPost->author = $faker->name();
            $newPost->content = $faker->paragraphs(5, true);
            $newPost->save();
        }
    }
}
