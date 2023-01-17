@extends('layouts.main')

@section('content')

<section class="container mt-2 my-3 py-5">
    <div class="container mt-2 text-center">
        <h4>Uspešno ste izvršili plaćanje!</h4>

        @if(Session::has('order_id') && Session::get('order_id') != null)

            <h4 style="color:blue" class="my-5"> Broj računa:  {{ Session::get('order_id') }} </h4>
            <p>Sačuvajte broj računa radi reklamacije!  </p>
            <p>Proizvod će biti na vašoj adresi u roku od 4 radna dana.</p>
        
        @endif
        
    </div>
</section>

@endsection