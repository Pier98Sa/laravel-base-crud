@extends('layouts.base')

@section('pageTitle', 'Elenco dei Fumetti')

@section('content')
    <header>
        <h1 class="text-center text-uppercase">Elenco dei Fumetti</h1>
    </header>
    <main>
        <div class="container">
            
            <a class="btn btn-primary text-white mb-2" href="{{ route('comic.create') }}" role="button">Aggiungi un nuovo fumetto</a>
            <table class="table table-striped pt-5 ">
                <thead class="table-dark">
                    <!--intestazione della colonna-->
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Thumb</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale Date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    <!--corpo della tabella-->
                    @foreach ($comics as $comic )
                        <tr>
                            <th scope="row">{{$comic->id}}</th>
                            <td ><img src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                            <td >{{$comic->title}}</td>
                            <td >{{$comic->description}}</td>
                            <td >{{$comic->price}}</td>
                            <td >{{$comic->series}}</td>
                            <td >{{$comic->sale_date}}</td>
                            <td >{{$comic->type}}</td>
                            <!--tasto per andare direttamente al singolo fumetto-->
                            <td >
                                <a class="btn btn-success text-white w-100" href="{{ route('comic.show', $comic->id) }}" role="button">View</a>
                                <a class="btn btn-primary text-white w-100 my-2" href="{{ route('comic.edit', $comic->id) }}" role="button">Edit</a>
                                

                               <!-- Button trigger modal -->
                                <span  class="btn btn-danger text-white w-100 " onclick="btnDelete({{$comic->id}});" data-bs-toggle="modal" data-bs-target="#cancel" >
                                    Remove
                                </span>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="cancel" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title">Eliminazione </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body">
                                                <p>Sei sicuro di voler cancellare il fumetto dalla tua lista ?</p>
                                            </div>

                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                <form action="" id='myForm' method="post" name="myForm">
                                                    @csrf
                                                    @method('DELETE')
                    
                                                    <button type="submit"  class="btn btn-danger text-white">Remove</button>
                                                </form>
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                
                </tbody>
            </table>
        </div>
    </main>


@endsection 

@section('other_script')
    <script src="{{asset('js/partials/index.js')}}"></script> 
@endsection