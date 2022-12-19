<?php

namespace App\Http\Livewire;

use App\Models\Depot;
use Livewire\Component;

class FindDepots extends Component
{
    public function render()
    {
        return view('livewire.find-depots',[
            'depots' => Depot::all()
        ]);
    }
}
