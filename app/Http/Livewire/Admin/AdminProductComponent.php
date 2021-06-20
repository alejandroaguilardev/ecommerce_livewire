<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
class AdminProductComponent extends Component
{
    use WithPagination;
    
    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        session()->flash('message', 'Se ha Eliminado el Producto con éxito');
    }

    public function render()
    {
        $products = Product::paginate();
        return view('livewire.admin.admin-product-component', compact('products'))->layout('layouts.template');
    }
}
