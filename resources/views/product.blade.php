
@extends('layouts.frontend')
@section('content')


    <nav class="navbar bg-primary navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand">ECommerce</a>

            <div class="d-flex">
                @if (Route::has('login'))
                        <div class="hidden">
                @auth
                    <a href="{{ url('/home') }}" class="">Home</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-dark">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-danger">Register</a>
                    @endif
                @endauth
            </div>
        @endif
            </div>
        
        </div>
    </nav>
        
    <div class="">
        {{-- Crousel Section --}}

        <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                <img src="/assets/images/1.jpg" class="img img-fluid d-block " style="height: 500px; width: 100%" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="/assets/images/2.jpg" class="img img-fluid d-block " style="height: 500px; width: 100%" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/assets/images/3.jpg" class="img img-fluid d-block " style="height: 500px; width: 100%" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>

        {{-- Product Cards --}}

        <div class="row row-cols-1 row-cols-md-4 g-4 mt-5 p-2">
            @if(isset($products))
                @foreach($products as $product)
                    <div class="col">
                    <div class="card h-100 ">
                        <img src="{{$product->image_name}}" class="card-img-top" width="50" height="350" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        </div>
                        <div class="container d-flex justify-content-between p-2">
                            <h6>Price: {{$product->sale_price}} <span class="text-muted text-decoration-line-through">{{$product->price}}</span></h6>

                            <add-to-cart-button product-id="{{$product->id}}"
                                user-id="{{auth()->user()->id ?? 0}}"    
                            />
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>

    </div>

            
@endsection