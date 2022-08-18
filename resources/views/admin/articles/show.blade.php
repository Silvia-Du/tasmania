@extends('layouts.app')

@section('content')

<div class="container show">
    <h1 class="my-5">Post:{{ $article->name }}</h1>
    <h3 class="my-5">Ultima modifica: {{ $article->updated_at }}</h3>

    <div class="row row-img">
        <div class="col-6 article-img p-3 d-flex justify-content-center">
            @if($article->image)
                <div class="image" >
                    <img src="{{ asset('storage/' . $article->image ) }}" alt="{{ $article->image_original_name }}">
                    {{-- <div><i>{{$article->image_original_name }}</i></div> --}}
                </div>
                @endif
            </div>
        <div class="col-6">
            <p>#ID {{ $article->id }}</p>
            <h3>Articolo:{{ $article->name }}</h3>
            <p>Prezzo:{{ $article->price }},00</p>

            @if ($article->category)
                <p>Categoria: {{ $article->category->name }}</p>
            @endif

            @if($article->tags)
                <h4>I tag assegnati a questo post:</h4>
                <div class="mb-4">
                    @foreach ($article->tags as $tag)
                        <h4 class="d-inline mb-4"><span class="badge badge-success">{{ $tag->name }}</span></h4>
                    @endforeach
                </div>
            @endif


            <h5>Description:</h5>
            <p>{{ $article->description }}</p>
        </div>
    </div>
    <div class="row mt-5">
        <a type="button" class="btn btn-rounded-plus" href="{{ route('admin.articles.index') }}">Back to list
            <i class="fa-solid fa-list"></i>
        </a>
        <a type="button" class="btn btn-rounded-plus mx-4" href="{{ route('admin.articles.edit', $article) }}">Modifica
            <i class="fa-solid fa-highlighter"></i>
        </a>
    </div>


</div>

@endsection

