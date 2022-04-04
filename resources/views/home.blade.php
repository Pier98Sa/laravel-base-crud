@extends('layouts.base')

@section('pageTitle', 'Homepage')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <span class="text-uppercase fs-3 ">Lista dei fumetti: </span>
                    <a class="btn btn-primary text-white mb-2" href="{{ route('comic.index') }}" role="button">Vai</a>
                </div>
            </div>


        </div>
    </main>



    




@endsection