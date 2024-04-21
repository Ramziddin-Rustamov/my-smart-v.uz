<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductSearch extends Component
{
    public $productName;
    public $products;

    public function mount()
    {
        
        $this->productName = 'Non';
        $this->search(); 
    }

    public function updatedProductName($newName)
    {
        $this->productName = $newName;
        $this->search();
    }

    public function search()
{
    if (empty($this->productName)) {
        $this->products = Product::orderBy('price')->get();
    } else {
        $this->products = Product::where('name', 'like', '%' . $this->productName . '%')
            ->orderBy('price')
            ->get();
    }
}

}
