<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Cart;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class CategoryComponent extends Component
{
    use WithPagination;

    public $sorting;
    public $pagisize;
    public $category;

    public function mount(Category $category)
    {
        $this->sorting = "default";
        $this->pagisize = 12;
        $this->category = $category;
    }


    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');

        session()->flash('success_message', 'El producto fue agregado');
        return redirect()->route('cart');
    }

    public function render()
    {
        $category_select = $this->category;
        switch ($this->sorting) {
            case 'date':
                $products = Product::where('category_id', $category_select->id)->orderBy('created_at', 'DESC')->paginate($this->pagisize);
            break;
            case 'price':
                $products = Product::where('category_id', $category_select->id)->orderBy('regular_price', 'ASC')->paginate($this->pagisize);
            break;
            case 'price-desc':
                $products = Product::where('category_id', $category_select->id)->orderBy('regular_price', 'DESC')->paginate($this->pagisize);
            break;
            default:
                $products = Product::where('category_id', $category_select->id)->paginate($this->pagisize);
            break;
        }

        $categories = Category::all();

        $popular_products = Product::inRandomOrder()->limit(4)->get();
        return view('livewire.category-component', compact('products','popular_products', 'categories', 'category_select'))->layout("layouts.template");
    }
}
 