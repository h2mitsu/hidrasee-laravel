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
            Order::create([
                'user_id' => Auth::user()->id,
                'total_harga' => $total_harga,
                'status' => 0,
                'kode_unik' => mt_rand(100,999)
            ]);

            $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
            $order->kode_order = 'HD-'.$order->id;
            $order->update();
        } else {
            //if order is not empty, update total harga
            $order->total_harga = $order->total_harga + $total_harga;
            $order->update();
        }

        OrderDetails::create([
            'product_id' => $this->product->id,
            'order_id' => $order->id,
            'jumlah_order' => $this->jumlah_pesanan,
            'total_harga' => $total_harga
        ]);

        $this->emit('updateCart');

        session()->flash('message', 'Add to cart successful');
        return redirect()->back();


    }

    public function render()
    {
        return view('livewire.product-details');
    }
}
