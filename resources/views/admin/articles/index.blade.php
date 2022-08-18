@extends('layouts.app')

@section('content')


    <div class="container index">
        {{-- tabella --}}
        <h1 class="my-4 mr-5">Tutti i tuoi articoli in vendita</h1>
        <a class="btn btn-rounded-plus mb-3 ml-5" href="{{ route('admin.articles.create') }}">
            {{-- btn-edit --}}
            Crea un nuovo articolo
            <i class="fa-solid fa-file-pen"></i>
        </a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#ID</th>
                <th scope="col">Nome</th>
                <th scope="col">prezzo</th>
                <th scope="col">quantità</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                     <tr>
                        <th scope="row">{{ $article->id }}</th>
                        <td>{{ $article->name }}</td>
                        <td>{{ $article->price }},00</td>
                        <td>{{ $article->quantity }}</td>
                        {{-- <td>{{ $article->category ? $article->category->name : '-'  }}</td>
                        <td> --}}
                            {{-- se presenti ciclo i tag altrimenti scrivo un segno - --}}
                            {{-- @forelse ($article->tags as $tag)
                                <span class="badge badge-success">{{$tag->name}}</span>
                            @empty
                                -
                            @endforelse
                        </td> --}}
                        <td>
                            <a class="btn btn-rounded" href="{{ route('admin.articles.show', $article) }}">
                                {{-- btn show --}}
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a class="btn btn-rounded" href="{{ route('admin.articles.edit', $article) }}">
                                {{-- btn-edit --}}
                                <i class="fa-solid fa-highlighter"></i>
                            </a>
                            <form
                            onsubmit="return confirm('Confermi l\'eliminazione del post: {{$article->name}}?')"
                            class="d-inline" action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-rounded" ><i class="fa-solid fa-dumpster"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        {{ $articles->links() }}
    </div>

@endsection
