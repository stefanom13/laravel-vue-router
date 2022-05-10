<?php

use App\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\Tag;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = Category::all();
        $categoriesId = $categories->pluck('id')->all();

        $tags = Tag::all();
        $tagsId = $tags->pluck('id')->all();

        for ($i=0; $i < 20 ; $i++) { 

            $post = new Post();
            $post->title = $faker->sentence(5);
            $post->slug = Str::slug($post->title);
            $post->content = $faker->paragraphs(10,true);
            $post->published_at = $faker->optional()->dateTime() ;// $faker->randomElement([ null, $faker->dateTime()]);
            $post->category_id = $faker->optional()->randomElement( $categoriesId );

            $randomTag = $faker->randomElements($tagsId,2);

            $post->save();
            // metodo per collegare post ai + tag
            $post->tags()->attach($randomTag);

        }
    }
}

