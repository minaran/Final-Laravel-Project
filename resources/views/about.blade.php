@extends('layouts.blog')

@section('title', 'About us')

@section('content')  
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-2">
        <img class="card-img-top" src="{{url('/images/myimage1.png')}}" alt="Perfect Beauty Center"/>  
            <div class="container">
                <div class="text-center my-2">
                    <h1 class="fw-bolder">About us</h1>
                    
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-12">
                <p class="lead mb-0"><h5>O NAMA</h5>
<h6>NAŠA PRIČA</h6>
<hr>
Na temeljima višegodišnjeg iskustva i velike ljubavi prema
nezi i oblikovanju kose ostvarili smo prvi poslovni cilj i osnovali 
Perfect Hair & MackUp Salon. 

Već mnogo godina koračamo sigurnim koracima vodeći se ambicijom, 
novim idejama i stalnim usavršavanjem. Učesnici smo brojnih 
sajmova, seminara, manifestacija i skupova posvećenih nezi kose, 
gde skupljamo nova znanja i veštine, kako bi svojim klijentima
ponudili samo najbolje.</p>
                </div>
            </div>
        </div>
@endsection       