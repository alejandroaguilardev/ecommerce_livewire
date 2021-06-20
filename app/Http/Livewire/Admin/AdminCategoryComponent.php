<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message', 'Se ha eliminado la categoría con éxito');
    }

    public function render() 
    {
        $categories = Category::paginate(5);
        return view('livewire.admin.admin-category-component', compact('categories'))->layout('layouts.template'); 
    } 
}
