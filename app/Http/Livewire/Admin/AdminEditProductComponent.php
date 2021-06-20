<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    
    public $product;

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

    public function update(){
        if($this->product->image != $this->image){
            $image= Carbon::now()->timestamp. '.' . $this->image->extension();
            $this->image->storeAs('products', $image);
        }else{
            $image = $this->image;
        }
        $this->product->update(['name' => $this->name, 
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

    public function mount(Product $product){

        $this->product = $product;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->category_id = $product->category_id;
        $this->short_description = $product->short_description;
        $this->description = $product->description;
        $this->regular_price = $product->regular_price;
        $this->sale_price = $product->sale_price;
        $this->sku = $product->sku;
        $this->stock_status = $product->stock_status;
        $this->featured = $product->featured;
        $this->quantity = $product->quantity;
        $this->image = $product->image;
    }


    public function render()
    {
        $product = $this->product;
        $categories = Category::all();
        return view('livewire.admin.admin-edit-product-component', compact('categories', 'product'))->layout('layouts.template');
    }
}
 