<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                    <tr>
                        <td>Number.</td>
                        <td>Picture</td>
                        <td>Description</td>
                        <td>Amount</td>
                        <td>Price</td>
                        <td><strong>Total Price</strong></td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1 ?>
                    @forelse ($order_details as $order_detail)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                <img src="{{ url('assets/galon') }}/{{ $order_detail->product->gambar }}"
                                     class="img-fluid" width="200">
                            </td>
                            <td>
                                {{ $order_detail->product->nama_produk}}
                            </td>

                            <td>{{ $order_detail->jumlah_order}}</td>
                            <td>Rp. {{ number_format($order_detail->product->harga) }}</td>
                            <td><strong>Rp. {{ number_format($order_detail->total_harga) }}</strong></td>
                            <td>
                                <div>
                                    <button wire:click="destroy({{ $order_detail->id }})"
                                            class="btn btn-sm btn-danger">Delete
                                    </button>
                                </div>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">Data Kosong</td>
                        </tr>
                    @endforelse

                    @if(!empty($order))
                        <tr>
                            <td colspan="6" align="right"><strong>Total Price: </strong></td>
                            <td align="right"><strong>Rp. {{ number_format($order->total_harga) }}</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right"><strong>Unique Code: </strong></td>
                            <td align="right"><strong>Rp. {{ number_format($order->kode_unik) }}</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right"><strong>Delivery Fee:  </strong></td>
                            <td align="right"><strong>Rp. 10.000</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right"><strong>Total Yang Harus dibayarkan : </strong></td>
                            <td align="right">
                                <strong>Rp. {{ number_format(($order->total_harga+$order->kode_unik)+ 10000) }}</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                            <td colspan="2">
                                <a href="{{ route('checkout')}}" class="btn btn-success btn-blok">
                                    <i class="fas fa-arrow-right"></i> Check Out
                                </a>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
