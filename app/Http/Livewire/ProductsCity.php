<?php

namespace App\Http\Livewire;

use App\Models\Kota;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;


class ProductsCity extends Component
{
    use WithPagination;

    public $search, $kota;

    protected $updatesQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($kotaid) {
        $kotaDetail = Kota::find($kotaid);

        if($kotaDetail) {
            $this->kota = $kotaDetail;
        }
    }

    public function render()
    {
        if ($this->search) {
            $products = Product::where('kota_id', $this->kota->id)->where('nama_produk', 'like', '%' . $this->search . '%')->paginate(12);
        } else {
            $products = Product::where('kota_id', $this->kota->id)->paginate(12); //12 is the number of products per page
        }

        return view('livewire.product-index', [
            'products' => $products
        ]);
    }
}
