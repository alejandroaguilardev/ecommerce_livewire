<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;

class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;

    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }

    public function storeCategory(){
        Category::create(['name' => $this->name, 'slug' => $this->slug]);
        session()->flash('message', 'Se Guardo con éxito la categoria');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.template');
    }
}
