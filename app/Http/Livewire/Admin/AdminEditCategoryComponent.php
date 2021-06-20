<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;

class AdminEditCategoryComponent extends Component
{ 
    public $slug;
    public $name;
    public $category;

    public function mount(Category $category)
    {
        $this->slug = $category->slug;
        $this->name = $category->name;
        $this->category = $category;
    }

    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }

    public function updateCategory(){
        $this->category->update(['name' => $this->name, 'slug' => $this->slug]);
        session()->flash('message', 'Se ha Actualizado con éxito');
    }
 
    public function render()
    {
        return view('livewire.admin.admin-edit-category-component')->layout('layouts.template');
    }
}
