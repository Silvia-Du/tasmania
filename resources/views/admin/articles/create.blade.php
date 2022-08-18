@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="my-5">Aggiungi un nuovo articolo</h1>

    {{-- elenco di tutti gli errori eventuali --}}
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.articles.store') }}" method="POST" id="form" enctype="multipart/form-data" >
        @csrf
        {{-- nome --}}
         <div class="mb-3">
          <label for="name" class="form-label">Nome articolo*</label>
          <input type="text"
          value="{{ old('name') }}"
          class="form-control @error('name') is-invalid @enderror"
          id="name" name="name" placeholder="Nome articolo" >
          @error('name')
              <p class="text-danger"> {{$message}} </p>
          @enderror
          <p class="text-danger" id="error-name"></p>
        </div>

        {{-- price --}}
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo*</label>
            <input type="number"
            value="{{ old('price') }}"
            class="form-control @error('price') is-invalid @enderror"
            id="price" name="price" placeholder="Prezzo" >
            @error('price')
                <p class="text-danger"> {{$message}} </p>
            @enderror
            <p class="text-danger" id="error-price"></p>
        </div>

        {{-- quantity --}}
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantità*</label>
            <input type="number"
            value="{{ old('quantity') }}"
            class="form-control @error('quantity') is-invalid @enderror"
            id="quantity" name="quantity" placeholder="Quantità" >
            @error('quantity')
                <p class="text-danger"> {{$message}} </p>
            @enderror
            <p class="text-danger" id="error-price"></p>
        </div>

        {{-- description --}}
        <div class="mb-3">
            <label for="description"
            class="form-label "
            >Descrizione articolo*</label>
            <textarea class="form-control
            @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-danger"> {{$message}} </p>
            @enderror
        </div>

        {{-- image --}}
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="file"
            class="form-control @error('image') is-invalid @enderror"
            id="image" name="image" >
            @error('image')
                <p class="text-danger"> {{$message}} </p>
            @enderror
        </div>

        <button type="submit" class="btn btn-rounded-plus my-4">Salva
            <i class="fa-solid fa-floppy-disk"></i>
        </button>
    </form>


</div>

@endsection
