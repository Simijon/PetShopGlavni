<!-- Footer Start -->
<div class="container-fluid bg-light mt-5 py-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6">
                <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Kontaktirajte nas</h5>
                <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor</p>
                <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Ulica Lole Ribara 29, Kosovska Mitrovica, Srbija</p>
                <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@example.com</p>
                <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+381 28 425396</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Linkovi</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="{{ route('home') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Početna</a>
                    <a class="text-body mb-2" href="{{ route('about') }}"><i class="bi bi-arrow-right text-primary me-2"></i>O nama</a>           
                    <a class="text-body mb-2" href="{{ route('products') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Proizvodi</a>
                    <a class="text-body mb-2" href="{{ route('cart') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Korpa</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Zapratite nas</h5>
                <div class="d-flex">
                    <a class="btn btn-outline-primary btn-square me-2" href="https://twitter.com"><i class="bi bi-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square me-2" href="https://facebook.com"><i class="bi bi-facebook"></i></a>
                    <a class="btn btn-outline-primary btn-square me-2" href="https://linkedin.com"><i class="bi bi-linkedin"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="https://instagram.com"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
            

          


            <!-- JavaScript Libraries -->
            <script src="{{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
            <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
            <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
            <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
        
            <!-- Template Javascript -->
            <script src="{{ asset('js/main.js') }}"></script>