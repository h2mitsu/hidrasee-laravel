<?php

namespace App\Http\Livewire;


use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Checkout extends Component
{
    public $total_harga, $nohp, $alamat;

    public function mount()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }

        $this->nohp = Auth::user()->no_hp;
        $this->alamat = Auth::user()->alamat;

        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if (!empty($order)) {
            $this->total_harga = ($order->total_harga + $order->kode_unik) + 10000;
        } else {
            return redirect()->route('home');
        }
    }

    public function checkout()
    {
        $this->validate([
            'nohp' => 'required|numeric',
            'alamat' => 'required'
        ]);
        $user = User::where('id', Auth::user()->id)->first();
        $user->no_hp = $this->nohp;
        $user->alamat = $this->alamat;
        $user->update();

        //update order data
        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $order->status = 1;
        $order->update();

        $this->emit('updateCart');
        session()->flash('message', 'Pesanan berhasil di checkout');
        return redirect()->route('history');

    }


    public function render()
    {
        return view('livewire.checkout');
    }
}
