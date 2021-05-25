<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10;$i++)
        {
            $newPost = new Post();
            //ci prendiamo dalla migration le info che vogliamo settare
            //sentence è una frase composta da tot parole definite in ()
            $newPost->title = $faker->sentence();
            $newPost->date = $faker->date();
            //text di base inserisce 200 parole che possono essere limitate in ()
            $newPost->content = $faker->text();
            $newPost->image = $faker->imageUrl(640, 480, 'animals', true);
            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->published = rand(0,1);
            //salviamo il model 
            $newPost->save();

        }
    }
}
