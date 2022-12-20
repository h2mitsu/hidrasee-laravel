<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    protected $order;
    protected $order_details = [];

    public function destroy($id)
    {
        $order_detail = OrderDetails::find($id);

        if (!empty($order_detail)) {

            $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
            $jumlah_order_detail = OrderDetails::where('order_id', $order->id)->count();
            if ($jumlah_order_detail == 1) {
                $order->delete();
            } else {
                $order->total_harga = $order->total_harga - ($order_detail->jumlah_pesanan * $order_detail->product->harga);
                $order->update();
            }

            $order_detail->delete();
        }

        $this->emit('updateCart');
        session()->flash('message', 'Item has been deleted');
    }

    public function render()
    {
        if (Auth::user()) {
            $this->order = Order::where('user_id', auth()->user()->id)->where('status', '0')->first();
            if ($this->order) {
                $this->order_details = OrderDetails::where('order_id', $this->order->id)->get();
            }

        }

        return view('livewire.cart',
            [
                'order' => $this->order,
                'order_details' => $this->order_details,
            ]);
    }
}
