@extends('layouts.base')

@section('pageTitle', 'Elenco dei Fumetti')

@section('content')
    
    <div class="container">
        <h1 class="text-center text-uppercase">Elenco dei Fumetti</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Thumb</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale Date</th>
                <th scope="col">Type</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic )
                    <tr>
                        <th>{{$comic->id}}</th>
                        <td><img src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->description}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>







@endsection