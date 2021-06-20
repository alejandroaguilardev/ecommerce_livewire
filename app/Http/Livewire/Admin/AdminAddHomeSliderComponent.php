<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddHomeSliderComponent extends Component
{
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;

    use WithFileUploads;

    public function mount()
    {
        $this->price = 0;
    }

    public function store()
    {
        $image = Carbon::now()->timestamp. ' '. $this->image->extension();
        $this->image->storeAs('sliders', $image);
        $slider = HomeSlider::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'price' => $this->price,
            'link' => $this->link,
            'image' => $image,
            'status' => $this->status,
        ]);
        session()->flash('message', 'Este Slider se ha Agregado con éxito');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-home-slider-component')->layout('layouts.template');
    }
}
