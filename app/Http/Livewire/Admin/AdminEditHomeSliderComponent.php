<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;
use Illuminate\Support\Carbon;
use Livewire\WithFileUploads;

class AdminEditHomeSliderComponent extends Component
{
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;
    public $slider;

    use WithFileUploads;

    public function mount($slider)
    {
        $this->slider = HomeSlider::find($slider);
        $this->title = $this->slider->title;
        $this->subtitle = $this->slider->subtitle;
        $this->price = $this->slider->price;
        $this->link = $this->slider->link;
        $this->image = $this->slider->image;
        $this->status = $this->slider->status;
    }

    public function update()
    {
        if($this->slider->image != $this->image){
            $image= Carbon::now()->timestamp. '.' . $this->image->extension();
            $this->image->storeAs('sliders', $image);
        }else{
            $image = $this->image;
        }

        $this->slider->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'price' => $this->price,
            'link' => $this->link,
            'image' => $image,
            'status' => $this->status,
        ]);

        session()->flash('message', 'Se ha Actualizado con éxito el Slider');
    }


    public function render()
    {
        return view('livewire.admin.admin-edit-home-slider-component')->layout('layouts.template');
    }
}
