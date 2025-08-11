<?php

namespace App\Livewire;

use App\Models\Hero;
use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Menu')]

class Menu extends Component
{

    public $selectedCategory = null;

    public function render()
    {
        $heros = Hero::all();
        $productCategory = ProductCategory::all();
        $productsQuery = Product::query();

        if ($this->selectedCategory) {
            $productsQuery->where('product_category_id', $this->selectedCategory);
        }

        $products = $productsQuery->get();

        return view('livewire.menu',[
            'heros' => $heros,
            'products' => $products,
            'productCategory' => $productCategory,
        ]);
    }
}
