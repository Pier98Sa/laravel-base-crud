@extends('layouts.base')

@section('pageTitle')

    Edit: {{$comic->title}}
@endsection

@section('content')
    
    <header class="my_header text-white d-flex align-items-center justify-content-center">
        <h1 class="text-uppercase">Modifica di {{$comic->title}} </h1>
    </header>

    <main>
        <div class="container">
            <form class="pt-5" method="POST" action="{{ route('comic.update', ['comic' => $comic->id]) }}">

                @csrf
                @method('PUT')
    
                <div class="mb-3">
                    <label for="thumb" class="form-label" >Indirizzo immagine</label>
                    <input  type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb',$comic->thumb)}}" required >
                </div>
    
                <div class="mb-3">
                    <label for="title" class="form-label" >Nome del fumetto</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title',$comic->title)}}" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label" >Prezzo</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{old('price',$comic->price)}}" required>
                </div>
    
                <div class="mb-3">
                    <label for="series" class="form-label" >Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{old('series',$comic->series)}}" required>
                </div>
    
                <div class="mb-3">
                    <label for="sale_date" class="form-label" >Data di uscita</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date',$comic->sale_date)}}" required>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="type" name="type" placeholder="Tipologia del fumetto" value="{{old('type',$comic->type)}}" required>
                    <label for="type">Tipologia del fumetto</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Descrizione" id="description" name="description" default="Descrizione" required >{{old('description',$comic->description)}}</textarea>
                    <label for="description">Descrizione</label>
                </div>
                
                <div class="d-flex  align-items-center ">
                    <a class="btn btn-danger text-white me-2" href="{{ route('comic.index') }}" role="button">Ritorna alla Home</a>
                    <button type="submit" class="btn btn-primary text-white">Invia</button>
                </div>
                
    
            </form>

        </div>
    </main>
@endsection