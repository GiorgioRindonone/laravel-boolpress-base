<?php

use Illuminate\Database\Seeder;
use App\Comment;
use Faker\Generator as Faker;
use App\Post;



class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        
            public function run(Faker $faker)
            {
                //1. seleziono solo i post pubblicati
                $posts = Post::where('published', 1)->get();
                //2. ciclo sui posts
                foreach ($posts as $post) {
                    //definisco i nostri commenti per i post
        
                    //per ogni singolo post mi vado a fare un ciclo 
                    //3. ciclo n volte per creare i commenti
                    for ($i = 0; $i < rand(0, 3); $i++){
        
                        $newComment =new Comment();
                        //newComment post_id è la Chiave esterna la ForeignKey 
                        //si copia l'id del post a cui è associato il commento
                        //condizione D'OBBLIGO, crea la RELAZIONE
                        $newComment->post_id = $post->id;
                        //4. rendo random il nome in caso di colonna nullable
                        if (rand(0,1)) {
                            $newComment->name = $faker->name();
                        }
                        $newComment->content = $faker->text();
                        $newComment->save();
        
                    }
                }
            }
        
        }
        
