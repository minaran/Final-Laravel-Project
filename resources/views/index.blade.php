@extends('layouts.blog')

@section('title', 'Perfect Beauty Center')

@section('content')    

    <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h3 class="fw-bolder">Welcome to Laravel Beauty project!</h3>
                    <p class="lead mb-0">Perfect Hair Salon</p>
                </div>
            </div>
        </header>
        
        <!-- Page content-->
        <div class="container">
            <div class="row">                                   
                <!-- Blog entries-->
                <div class="col-lg-12">

                    <!-- Featured blog post   // necu ga koristiti sad, pa nek samo stoji tako
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2023</div>
                            <h2 class="card-title">Featured Post Title</h2>
                            <p class="card-text">Moze bilo koji tekst da se ubaci ovde</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                </div>    -->

                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">

        @foreach($posts as $post)
                        <div class="col-lg-12">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="{{ route('posts.show', $post->id) }}"><img class="card-img-top" src="https://dummyimage.com/700x80/ad71ad/10133e.jpg&text=Perfect+Beauty+Center" alt="Trenutno je nedostupna slika" /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ $post->created_at }}</div>
                                    <h2 class="card-title h4">{{ $post->title }}</h2>
                                    <p class="card-text">{{ $post->post_text }}</p>
                                    <a class="btn btn-primary" href="{{ route('posts.show', $post->id) }}">Pogledajte →</a>
                                </div>
                            </div>
                        </div>
        @endforeach
                </div>
                </div>
                        
                    
                    <!--   Pagination                 // mozda ce mi trebati, necu da brisem
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>      --> 

                <!-- Side widgets-->
                <div class="col-lg-12">
                    
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">KATEGORIJE</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
        @foreach($categories as $category)
        <li><a href="{{ route ('home') }}?category_id={{$category->id }}">{{ $category->name }}</a></li>  <!-- povezali smo na bazu da ide kroz petlju -->
        @endforeach
                                    </ul>                                
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Naše su cene vrlo povoljne !!! </div>
                        <div class="card-body">
                    <ul>
                    <li>OSNOVNE USLUGE	S	M	L	XL	XXL	XXXL</li>
                    <li>FENIRANJE	500	 600 700  800  900	1200</li>
                    <li>PRANJE I ŠIŠANJE	850	950	1100 1200 1300 1500</li>
                    <li>ŠIŠANJE UZ KOLORACIJE	750	750	750	750	750	750</li>
                    <li>PRANJE, ŠIŠANJE, FENIRANJE	1200 1300 1400 1600	1900 2100</li>
                    <li>PROFESIONALNO ŠMINKANJE	1200 2000 3000</li>
                    </ul>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>    
@endsection        