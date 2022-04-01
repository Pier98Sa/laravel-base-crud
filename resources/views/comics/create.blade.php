@extends('layouts.base')

@section('pageTitle', 'Aggiunta Fumetti')

@section('content')
    
    <header class="my_header text-white d-flex align-items-center justify-content-center">
        <h1 class="text-uppercase">Aggiunta di un nuovo fumetto</h1>
    </header>

    <main>
        <div class="container">
            <form class="pt-5" method="POST" action="{{ route('comic.store') }}">

                @csrf
    
                <div class="mb-3">
                    <label for="thumb" class="form-label" >Indirizzo immagine</label>
                    <input required type="text" class="form-control" id="thumb" name="thumb" >
                </div>
    
                <div class="mb-3">
                    <label for="title" class="form-label" >Nome del fumetto</label>
                    <input type="text" class="form-control" id="title" name="title" >
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label" >Prezzo</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" >
                </div>
    
                <div class="mb-3">
                    <label for="series" class="form-label" >Serie</label>
                    <input type="text" class="form-control" id="series" name="series" >
                </div>
    
                <div class="mb-3">
                    <label for="sale_date" class="form-label" >Data di uscita</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" >
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="type" name="type" placeholder="Tipologia del fumetto">
                    <label for="type">Tipologia del fumetto</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Descrizione" id="description" name="description" default="Descrizione" ></textarea>
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