<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use App\http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->paginate(8);
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
       $data = $request->all();

       if(array_key_exists('image', $data)){
        $data['image_original_name'] = $request->file('image')->getClientOriginalName();
        $data['image'] = Storage::put('uploads', $data['image']);
        }

        $new_article = new Article();
        $data['slug'] = Article::slugGenerator($data['name']);
        $new_article->fill($data);
        $new_article->save();

        return redirect()->route('admin.articles.show', $new_article);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('admin.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {

        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $data = $request->all();

        if(array_key_exists('image', $data)){

            // se l'immagine è già presente vuol dire che va sostituita
            // quindi se presente la elimino
            if($article->image){
                Storage::delete($article->image);
            }

            $data['image_original_name'] = $request->file('image')->getClientOriginalName();
            $data['image'] = Storage::put('uploads', $data['image']);
        }

        // modifico lo slug solo se ho cambiato il title
        if($data['name'] != $article->name){
            $data['slug'] = Article::slugGenerator($data['name']);
        }

        $article->update($data);

        // se esiste l'array tags lo uso per sincronizzara i dati della tabella ponte
        // se non esiste la chiave vuol dire che devo cancellare tutte le relazioni eventualmente presenti
        // posso usare sync passando un array vuoto
        //$article->tags()->sync([]);
        // oppure detach non passando nulla

        // if(array_key_exists('tags', $data)){
        //     $article->tags()->sync($data['tags']);
        // }else{
        //     $article->tags()->detach();
        // }

        return redirect()->route('admin.articles.show', $article);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
