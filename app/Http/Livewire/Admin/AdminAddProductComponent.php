<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    
    public $name;
    public $slug;
    public $category_id;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $sku;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;


    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function store(){
        $image= Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('products', $image);

        Product::create(['name' => $this->name, 
        'slug' => $this->slug, 
        'category_id' => $this->category_id, 
        'short_description' => $this->short_description, 
        'description' => $this->description, 
        'regular_price' => $this->regular_price,
        'sale_price' => $this->sale_price, 
        'sku' => $this->sku, 
        'stock_status' => $this->stock_status, 
        'featured' => $this->featured, 
        'quantity' => $this->quantity, 
        'image' => $image]);

        session()->flash('message', 'Se ha Creado un Nuevo Producto');
    }

    public function mount(){
        $this->stock_status = "instock";
        $this->featured = 0;
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-add-product-component', compact('categories'))->layout('layouts.template');
    }
}
