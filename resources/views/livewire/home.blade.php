<div class="container">
    {{-- Carousel --}}
    <section class="hero">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/slide1.png" class="d-block w-100" alt="slide1">
                </div>
                <div class="carousel-item">
                    <img src="assets/slide2.png" class="d-block w-100" alt="slide2">
                </div>
                <div class="carousel-item">
                    <img src="assets/slide3.png" class="d-block w-100" alt="slide3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    {{-- End Carousel --}}
    {{-- Cards --}}
    <section class="features mt-4 mb-5">
        <h3><strong>Let's get started!</strong></h3>
        <div class="row mt-4">
            <div class="col">
                <a class="text-decoration-none" href="{{ route('product')  }}">
                    <div class="card shadow card-fx">
                        <div class="card-body text-center">
                            <img src="assets/order.png" class="img-fluid pt-2 pb-2 mb-3">
                            <h4>Order</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('under-construction') }}" class="text-decoration-none">
                    <div class="card shadow card-fx">
                        <div class="card-body text-center">
                            <img src="assets/findnearby.png" class="img-fluid pt-2 pb-2 mb-3">
                            <h4>Find Depots</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="" class="text-decoration-none">
                    <div class="card shadow card-fx">
                        <div class="card-body text-center">
                            <img src="assets/history.png" class="img-fluid pt-2 pb-2 mb-3">
                            <h4>History</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('faq') }}" class="text-decoration-none">
                    <div class="card shadow card-fx">
                        <div class="card-body text-center">
                            <img src="assets/FAQ.png" class="img-fluid pt-2 pb-2 mb-3">
                            <h4>FAQ</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    {{-- End Cards --}}

    {{-- cards 2 --}}
    <section class="box mt-4 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
