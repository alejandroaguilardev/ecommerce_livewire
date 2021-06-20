<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminHomeSliderComponent extends Component
{
    public function delete($id){
        $slider = HomeSlider::find($id);
        $slider->delete();

        session()->flash('message', 'Se ha Eliminado con éxito el slider');
    }

    public function render() 
    { 
        $sliders = HomeSlider::all();
        return view('livewire.admin.admin-home-slider-component', compact('sliders'))->layout('layouts.template');
    }
}
