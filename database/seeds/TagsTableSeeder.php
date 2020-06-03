<?php

use Illuminate\Database\Seeder;

// ----Nei SEEDER devo sempre importare i vari MODELS----
use App\User;
use App\Tag;
// ----Nei SEEDER devo sempre importare i vari MODELS----

// ---------------Ed ovviamente il Faker---------------
use Faker\Generator as Faker;
// ---------------Ed ovviamente il Faker---------------

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {

          // ---prendo prima di tutto un utente casuale da associare---
          $user = User::inRandomOrder()->first();
          // ---prendo prima di tutto un utente casuale da associare---

          $tag = new Tag;
          $tag->user_id = $user->id;
          $tag->name = $faker->word();

          $tag->save();
        }
    }
}
