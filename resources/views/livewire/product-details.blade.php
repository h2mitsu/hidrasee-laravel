<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('product' )}}">All products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product detail</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="card-body">
                <img src="{{ url('assets/galon') }}/{{ $product->gambar }}" class="img-fluid product-img">
            </div>
        </div>
        <div class="col-4">
            <h2>
                <strong>{{ $product->nama_produk }}</strong>
            </h2>
            <h4 class="fs-3">
                Rp. {{ number_format($product->harga) }}
                @if($product->is_ready == 1)
                    <span class="badge bg-success fs-5"> <i class="fas fa-check"></i> Ready Stok</span>
                @else
                    <span class="badge bg-danger fs-5"> <i class="fas fa-times"></i> Stok Habis</span>
                @endif
            </h4>
            <div class="row">
                <div class="col">
                    <form wire:submit.prevent="addToCart">
                        <table class="table" style="border-top : hidden">
                            <tr>
                                <td>Depot</td>
                                <td>:</td>
                                <td>
                                    {{ $product->depot->nama_depot }}
                                </td>
                            </tr>
                            <tr>
                                <td>Stock</td>
                                <td>:</td>
                                <td>{{ $product->stok }}</td>
                            </tr>
                            <tr>
                                <td>Delivery Fee</td>
                                <td>:</td>
                                <td>Rp. {{ number_format($product->ongkir) }}</td>
                            </tr>
                            <tr>
                                <td>Amount</td>
                                <td>:</td>
                                <td>
                                    <input id="jumlah_pesanan" type="number"
                                           class="form-control @error('jumlah_pesanan') is-invalid @enderror"
                                           wire:model="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}" required
                                           autocomplete="name" autofocus>

                                    @error('jumlah_pesanan')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <button type="submit" class="btn btn-dark btn-block">
                                        Add to cart
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>


