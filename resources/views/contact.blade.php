@extends('layouts.blog')

@section('title', 'Contact')

@section('content')  

        <!-- Page header with logo and tagline-->
        <header class="py-3 bg-light border-bottom mb-2">
        <img class="card-img-top" src="{{url('/images/myimage2.png')}}" alt="Perfect Beauty Center"/>   
            <div class="container">
                <div class="text-center my-2">
                    <h1 class="fw-bolder">Contact us</h1>
                    
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-12">
                <p class="lead mb-0">Možete nas kontaktirati putem telefona, e-maila ili doći lično na adresu:</p>
                </div>
            </div>
        </div>
@endsection       

<!-- Drugi sadrzaj koji mogu da unesem-->
@section('content2')
<div>
<br>    
<h5>Beogradska 5, 11000 Beograd</h5>
<h5>E-pošta: perfecthair@gmail.com</h5>
<h5>Telefon: 066 222 333 111</h5>
<br>
<h5>RADNO VREME</h5>
Ponedeljak – Petak: 09:00 – 20:00
Subota i nedelja: 09:00 – 19:00
Sreda je neradan dan
</div>
@endsection