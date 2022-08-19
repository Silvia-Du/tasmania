@extends('layouts.app')

@section('content')


<div class="container">
    <h1 class="d-inline mr-5">Modifica di: {{ $article->name }}</h1>

    <a type="button" class="btn btn-rounded-plus mb-3 ml-5" href="{{ route('admin.articles.index') }}">Back to list
        <i class="fa-solid fa-list"></i>
    </a>

    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form
    action="{{ route('admin.articles.update', $article) }}" method="POST" id="form" enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')

        {{-- nome --}}
         <div class="mb-3">
          <label for="name" class="form-label">Nome articolo*</label>
          <input type="text"
          value="{{ old('name', $article->name) }}"
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
          value="{{ old('price', $article->price) }}"
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
          value="{{ old('quantity', $article->quantity) }}"
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
            @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10">{{ old('description', $article->description) }}</textarea>
            @error('description')
                <p class="text-danger"> {{$message}} </p>
            @enderror
          </div>

          {{-- category --}}

          <div class="mb-3">
            <select class="form-select" name="category_id" >
                <option value="">Seleziona una categoria</option>
                @foreach ($categories as $category)
                 <option
                    @if($category->id == old('category_id', $article->category ? $article->category->id : ''))
                        selected
                    @endif
                    value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>
          </div>

          {{-- image --}}
          <div class="mb-3">
            @if($article->image)
                <div class="image" >
                    <img id='output-image' width="150" src="{{ asset('storage/' . $article->image ) }}" alt="{{ $article->image_original_name }}">
                </div>
            @endif
            <label for="image" class="form-label">Immagine</label>
            <input type="file"
            onchange="showImage(event)"
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

<script>
    var showImage = function(event) {
        const image = document.getElementById('output-image');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>

@endsection
