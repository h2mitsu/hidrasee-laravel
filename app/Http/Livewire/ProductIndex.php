<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;


class ProductIndex extends Component
{
    use WithPagination;

    public $search;

    protected $updatesQueryString = ['search'];


    public function render()
    {
        if ($this->search) {
            $products = Product::where('nama_produk', 'like', '%' . $this->search . '%')->paginate(12);
        } else {
            $products = Product::paginate(12); //12 is the number of products per page
        }

        return view('livewire.product-index', [
            'products' => $products,
        ]);
    }
}
