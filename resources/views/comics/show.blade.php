@extends('layouts.base')
@section('pageTitle')
    {{$comic->title}}
@endsection


@section('content')
    
    <header class="my_header text-white d-flex align-items-center justify-content-center">
        <h1 class="text-uppercase">{{$comic->title}}</h1>
    </header>

    <main class="comic-main">
        <div class="container">
            <div class="row pt-5">
                <div class="col">
                    <div class="d-flex ">
                        <!---Thumb-->
                        <div class="w-25">
                            <img class="w-100" src="{{$comic->thumb}}" alt="">
                        </div>
                        
                        <!--info comic-->
                        <div class="d-flex flex-column w-75 ps-5 fs-2 align-self-end">
                            <span> <strong>Series:</strong>  {{$comic->series}} </span>
                            <span><strong>Price:</strong> {{$comic->price}} $ </span>
                            <span><strong>Sale Date:</strong> {{ \Carbon\Carbon::parse($comic->sale_date)->format('M d Y')}}</span>
                            <span><strong>Type:</strong> {{$comic->type}}</span>
                        </div>

                        <!--Tasto per tornare alla home-->
                        <div>
                            <a class="btn btn-primary text-white" href="{{route('comic.index')}}" role="button">Home</a>
                        </div>
                    </div>
                    
                </div>
     
            </div>

            <div class="row pt-5">
                <div class="col">
                    <!--Description-->
                    <div>
                        <h3 class="fw-bold text-uppercase">Description</h3>
                        <p class="fs-2">{{$comic->description}}</p>
                    </div>
                </div>
            </div>

        </div>
    </main>
        
    
@endsection