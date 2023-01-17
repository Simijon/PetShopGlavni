@extends('layouts.main')

@section('content')

 <!-- Products Start -->
 <div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Proizvodi</h6>
            <h1 class="display-5 text-uppercase mb-0">Proizvodi za <br>vaše ljubimce</h1>
        </div>
        <div class="row">

            @foreach($products as $product)

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="product-item position-relative bg-light d-flex flex-column text-center">
                    <img style="width:200px; height: 200px" class="img-fluid mb-4 mx-auto" src="{{ asset('images/'.$product->image) }}" alt="">
                    <h6 class="text-uppercase">{{ $product->name }}</h6>

                    @if($product->sale_price != null)
                    <h5 class="text-primary mb-0">€{{ $product->sale_price }}</h5>
                    <h6 class="text-primary mb-0" style="text-decoration: line-through">€{{ $product->price }}</h6>
                    @else
                    <h5 class="text-primary mb-0">€{{ $product->price }}</h5>
                    <h6 class="text-primary mb-0">&nbsp </h6>

                    @endif


                    <div class="btn-action d-flex justify-content-center">
                        
                        <form method="POST" action="{{ route('add_to_cart') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <input type="hidden" name="sale_price" value="{{ $product->sale_price }}">
                            <input type="hidden" name="image" value="{{ $product->image }}">
                            <input type="hidden" name="quantity" value="1">

                            <button class="btn btn-primary py-2 px-3" type="submit"><i class="bi bi-cart"></i></button>

                        </form>

                        <a class="btn btn-primary py-2 px-3 mb-3" href="{{ route('single_product',['id'=>$product->id]) }}"><i class="bi bi-eye"></i></a>
                    </div>
                </div>
            </div>

            @endforeach
            
        </div>
    </div>
</div>
<!-- Products End -->


<!-- Offer Start -->
<div class="container-fluid bg-offer my-5 py-5">
    <div class="container py-5">
        <div class="row gx-5 justify-content-start">
            <div class="col-lg-7">
                <div class="border-start border-5 border-dark ps-5 mb-5">
                    <h6 class="text-dark text-uppercase">Specijalna ponuda</h6>
                    <h1 class="display-5 text-uppercase text-white mb-0">Uštedite do čak 50% !!!</h1>
                </div>
                <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo lorem. Elitr ut dolores magna sit. Sea dolore sed et.</p>
                <a href="{{ route('about') }}" class="btn btn-outline-light py-md-3 px-md-5">Saznajte više</a>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->




@endsection