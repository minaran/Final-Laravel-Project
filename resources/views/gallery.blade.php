@extends('layouts.blog')

@section('title', 'Gallery')

@section('content')  

        <!-- Page header with logo and tagline-->
        <header class="py-3 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Gallery</h1>
                    
                </div>
            </div>
        </header>

        <!-- Page content-->
        <div class="container">
            <div class="row">

                <!-- Blog entries-->
                <div class="col-lg-12">
                <p class="lead mb-0">Pogledajte galeriju slika</p>
                <img
                    class="d-block my=5" 
                    alt="Unsplash random photo"
                    style="max-height: 240px;"
                    src="{{ $randomPhoto }}" 
                    />
                    <hr>
                </div>
            </div>
        </div>
@endsection       