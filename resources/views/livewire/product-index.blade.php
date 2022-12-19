<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1>All Products</h1>
        </div>
        <div class="col">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Product" wire:model="search">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
            </div>
        </div>
    </div>


    <section class="products mb-5">
        <div class="row mt-4">
            {{-- Looping through products --}}
            @foreach($products as $product)
                <div class="col-md-3 mb-3">
                    <div class="card card-fx">
                        <div class="card-body">
                            {{-- create an if statement that if product stok is 0 when the card is clicked there will be an out of stock alert  --}}
                            @if($product->stok == 0)
                                <div class="alert alert-danger" role="alert">
                                    Out of Stock
                                </div>
                            @endif
                            <img src="{{ url('assets/galon') }}/{{ $product->gambar }}" class="img-fluid">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h5><strong>{{ $product->nama_produk }}</strong></h5>
                                    <h5>Rp. {{ number_format($product->harga) }}</h5>
                                    @if ($product->depot_id == 1)
                                        <h6>Depot Surga</h6>
                                    @elseif ($product->depot_id == 2)
                                        <h6>Depot Rahmat</h6>
                                    @elseif ($product->depot_id == 3)
                                        <h6>Depot Suci</h6>
                                    @elseif ($product->depot_id == 4)
                                        <h6>Supreme</h6>
                                    @elseif ($product->depot_id == 5)
                                        <h6>Dior</h6>
                                    @endif
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12 text-center">
                                    @if($product->stok > 0)
                                        <a href="{{ route('products.detail', $product->id) }}" class="btn btn-success">Order</a>
                                    @else
                                        <a href="{{ route('products.detail', $product->id) }}"
                                           class="btn btn-danger btn-block disabled">Out Of Stock</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col">
                {{ $products->links() }}
            </div>
        </div>
    </section>
</div>
