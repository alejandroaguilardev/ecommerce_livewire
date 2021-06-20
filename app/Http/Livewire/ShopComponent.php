<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Cart;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class ShopComponent extends Component
{
    use WithPagination;

    public $sorting;
    public $pagisize;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagisize = 12;
    }


    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');

        session()->flash('success_message', 'El producto fue agregado');
        return redirect()->route('cart');
    }

    public function render()
    {
        switch ($this->sorting) {
            case 'date':
                $products = Product::orderBy('created_at', 'DESC')->paginate($this->pagisize);
            break;
            case 'price':
                $products = Product::orderBy('regular_price', 'ASC')->paginate($this->pagisize);
            break;
            case 'price-desc':
                $products = Product::orderBy('regular_price', 'DESC')->paginate($this->pagisize);
            break;
            default:
                $products = Product::paginate($this->pagisize);
            break;
        }

        $categories = Category::all();

        $popular_products = Product::inRandomOrder()->limit(4)->get();
        return view('livewire.shop-component', compact('products','popular_products', 'categories'))->layout("layouts.template");
    }
}
 