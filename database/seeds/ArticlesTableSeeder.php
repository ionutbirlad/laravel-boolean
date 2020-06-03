<?php

use Illuminate\Database\Seeder;

// ----Nei SEEDER devo sempre importare i vari MODELS----
use App\User;
use App\Article;
use App\Category;
use App\Tag;
// ----Nei SEEDER devo sempre importare i vari MODELS----

// ---------------Ed ovviamente il Faker---------------
use Faker\Generator as Faker;
// ---------------Ed ovviamente il Faker---------------

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) {
          // ---prendo prima di tutto un utente ed una categoria casuale da associare---
          $user = User::inRandomOrder()->first();
          $category = Category::inRandomOrder()->first();
          // ---prendo prima di tutto un utente ed una categoria casuale da associare---

          $article = new Article;
          $article->user_id = $user->id;
          $article->category_id = $category->id;
          $article->title = $faker->sentence(6, true);
          $article->summary = $faker->sentence(10, true);
          $article->body = $faker->paragraph(100, true);
          $article->visible = rand(0, 1);

          $article->save();

          $tags = Tag::inRandomOrder()->limit(4)->get();
          $article->tags()->attach($tags);
        }
    }
}
