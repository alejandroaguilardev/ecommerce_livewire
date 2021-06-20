<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Cart;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class SearchComponent extends Component
{
    use WithPagination;

    public $sorting;
    public $pagisize;

    public $search;
    public $product_cat;
    public $product_cat_id;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagisize = 12;
        $this->fill(request()->only('search', 'product_cat', 'product_cat_id'));
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
                $products = Product::where('name', 'like', '%' . $this->search . '%')->where('category_id', 'like', '%'  . $this->product_cat_id . '%')->orderBy('created_at', 'DESC')->paginate($this->pagisize);
            break;
            case 'price':
                $products = Product::where('name', 'like', '%' . $this->search . '%')->where('category_id', 'like', '%'  . $this->product_cat_id . '%')->orderBy('regular_price', 'ASC')->paginate($this->pagisize);
            break;
            case 'price-desc':
                $products = Product::where('name', 'like', '%' . $this->search . '%')->where('category_id', 'like', '%'  . $this->product_cat_id . '%')->orderBy('regular_price', 'DESC')->paginate($this->pagisize);
            break;
            default:
                $products = Product::where('name', 'like', '%' . $this->search . '%')->where('category_id', 'like', '%'  . $this->product_cat_id . '%')->paginate($this->pagisize);
            break;
        }

        $categories = Category::all();

        $popular_products = Product::inRandomOrder()->limit(4)->get();
        return view('livewire.search-component', compact('products','popular_products', 'categories'))->layout("layouts.template");
    }
}
 