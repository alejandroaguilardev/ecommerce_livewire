<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactComponent extends Component
{
    public $name, $phone, $email, $message;

    public function mail(){
        $this->name='';
        $this->phone='';
        $this->email='';
        $this->message='';
        session()->flash('message', 'Se ha envíado el mensaje correctamente');
    }

    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.template');
    }
}
