<?php

namespace App\Http\Livewire;

use App\Models\Depot;
use App\Models\Kota;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.navbar', [
            'kotas' => Kota::all(),
            'depots' => Depot::all()

        ]);
    }
}
