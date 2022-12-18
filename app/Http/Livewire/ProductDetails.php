<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductDetails extends Component
{
    public $product,$jumlah_pesanan;


    public function mount($id)
    {
        $productDetail = Product::find($id);

        if($productDetail){
            $this->product = $productDetail;
        }

    }

    public function addToCart()
    {
        $this->validate([
            'jumlah_pesanan' => 'required|numeric|min:1'
        ]);

        //check if user is logged in or not
        if (!Auth::user()) {
            return redirect()->route('login');
        }

        $total_harga = $this->jumlah_pesanan * $this->product->harga;

        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        //if order is empty, create new order
        if(empty($order)){

        }

    }

    public function render()
    {
        return view('livewire.product-details');
    }
}
