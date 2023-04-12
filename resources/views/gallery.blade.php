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
                    alt="Unsplash random photo, ali stvarno ne znam zasto se ne prikazuje !!!"
                    style="max-height: 240px;"
                    src="https://images.unsplash.com/photo-1681306635626-3fbbf16b1016?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=Mnw0MzM0MjV8MHwxfGFsbHwxMHx8fHx8fDJ8fDE2ODEzMjI5OTM&ixlib=rb-4.0.3&q=80&w=1080"
                    />
                    <hr>
                <img src="https://images.unsplash.com/photo-1527799820374-dcf8d9d4a388?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1011&q=80"/>    
                </div>
            </div>
        </div>
@endsection       