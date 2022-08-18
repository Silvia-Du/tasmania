<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i =0; $i < 50; $i++){
            $new_article = new Article();
            $new_article->name = $faker->sentence(3);
            $new_article->slug = Article::slugGenerator($new_article->name);
            $new_article->price = $faker->numberBetween(7, 300);
            $new_article->description = $faker->sentence(10);
            //dopo aggiungerò le immagini
            $new_article->quantity = $faker->numberBetween(1, 50);
            $new_article->save();
        }
    }
}
