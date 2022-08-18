<?php

namespace App;

use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   public static function slugGenerator($name){

        $slug = Str::slug( $name, '-' );
        $slug_new_article = $slug;
        $c = 1;
        $same_article = Article::where('slug', $slug)->first();
        while($same_article){
            $slug = $slug_new_article.'-'.$c;
            $same_article = Article::where('slug', $slug)->first();
            $c ++;
        }
        return $slug;
   }

   protected $fillable = [
            'name',
            'slug',
            'price',
            'description',
            'image',
            'image_original_name',
            'quantity'
   ];
}
