@extends('layouts.main')

@section('content')


    <!-- Checkout -->
    <section class="my-2 py-3 checkout">
        <div class="container text-center mt-1 pt-5">
            <h2>Podaci za isporuku</h2>
            <hr class="mx-auto">
        </div>

        <div class="mx-auto container">
            <form id="checkout-form" method="POST" action="{{ route('place_order') }}">
                @csrf
                <div class="form-group checkout-small-element">
                    <label for="">Ime i prezime</label>
                    <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Ime i prezime" oninvalid="this.setCustomValidity('Morate uneti ime i prezime!')" oninput="setCustomValidity('')" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="checkout-email" name="email" placeholder="email@example.com" oninvalid="this.setCustomValidity('Morate uneti email adresu!')" oninput="setCustomValidity('')" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">Telefon</label>
                    <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="+381 23 4567890" oninvalid="this.setCustomValidity('Morate uneti broj telefona!')" oninput="setCustomValidity('')" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">Grad</label>
                    <input type="text" class="form-control" id="checkout-city" name="city" placeholder="Grad" oninvalid="this.setCustomValidity('Morate uneti grad!')" oninput="setCustomValidity('')" required>
                </div>

                <div class="form-group checkout-large-element">
                    <label for="">Adresa</label>
                    <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Adresa" oninvalid="this.setCustomValidity('Morate uneti adresu!')" oninput="setCustomValidity('')" required>
                </div>


                @if(Session::has('total'))
                 @if(Session::get('total') != null)

                <div class="form-group checkout-btn-container">
                    <p>Ukupno za plaćanje: €{{Session::get('total')}}</p>
                    <input type="submit" class="btn" id="checkout-btn" name="checkout_btn" value="Nastavite">
                </div>
                @endif
                @endif
            </form>
        </div>
    </section>


 
@endsection