<?php

namespace App\Http\Livewire;

use App\Models\Depot;
use App\Models\Kota;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public $amount = 0;

    protected $listeners = ['updateCart' => 'updateCart'];

    public function updateCart(){
        if (Auth::user()) {   //ngecek kalo user dah login ato nggak
            $order = Order::where('user_id', Auth::user()->id)->where('status', '0')->first();
            if ($order) {
                $this->amount = OrderDetails::where('order_id', $order->id)->count(); //ngeset amount jadi total amount dari order details
            }else {
                $this->amount = 0;
            }

        }
    }

    public function mount()
    {
        if (Auth::user()) {   //ngecek kalo user dah login ato nggak
            $order = Order::where('user_id', Auth::user()->id)->where('status', '0')->first();
            if ($order) {
                $this->amount = OrderDetails::where('order_id', $order->id)->count(); //ngeset amount jadi total amount dari order details
            }else {
                $this->amount = 0;
            }
        }
    }

    public function render()
    {
        return view('livewire.navbar', [
            'kotas' => Kota::all(),
            'depots' => Depot::all(),
            'jumlah_order' => $this->amount,

        ]);
    }
}
