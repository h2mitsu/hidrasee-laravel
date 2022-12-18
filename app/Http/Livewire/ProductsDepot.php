<?php

namespace App\Http\Livewire;

use App\Models\Depot;
use App\Models\Kota;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsDepot extends Component
{
    use WithPagination;

    public $search, $depot;

    protected $updatesQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($depotid) {
        $depotDetail = Depot::find($depotid);

        if($depotDetail) {
            $this->depot= $depotDetail;
        }
    }

    public function render()
    {
        if ($this->search) {
            $products = Product::where('depot_id', $this->depot->id)->where('nama_produk', 'like', '%' . $this->search . '%')->paginate(12);
        } else {
            $products = Product::where('depot_id', $this->depot->id)->paginate(12); //12 is the number of products per page
        }

        return view('livewire.product-index', [
            'products' => $products
        ]);
    }
}
