<div class="container">
    <section class="banner">
        <div class="banner">
            <div class="col">
                <div class="row">
                    <img src="{{ url('assets/joinus/joinus.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-4 me-5">
            <a href="{{ route('under-construction') }}" class="text-decoration-none">
                <div class="card shadow card-fx">
                    <div class="card-body text-center">
                        <img src="assets/joinus/depot.png" class="img-fluid pt-2 pb-2 mb-3">
                        <h4>As a Depot</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4 ml-3">
            <a href="{{ route('under-construction') }}" class="text-decoration-none">
                <div class="card shadow card-fx">
                    <div class="card-body text-center">
                        <img src="assets/joinus/rider.png" class="img-fluid pt-2 pb-2 mb-3" style="height: 155px">
                        <h4>As a Rider</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

{{-- end of clickable cards --}}

{{-- create a form to register as a depot --}}


