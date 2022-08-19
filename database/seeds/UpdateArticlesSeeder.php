<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Article;

class UpdateArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = Article::all();
        foreach($articles as $article){
            //2. ad ogni ciclo estraggo dandom un id dalla tab categories
            $category_id = Category::inRandomOrder()->first()->id;
            $article->category_id = $category_id;
            $article->update();
        }

    }
}
