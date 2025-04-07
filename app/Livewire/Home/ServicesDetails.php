<?php

namespace App\Livewire\Home;

use Livewire\Component;

class ServicesDetails extends Component
{
    public $service;

    public function mount($slug)
    {
        $this->service = \App\Models\Services::where('slug',$slug)->where('status',1)->first();
        if (!$this->service){
            abort(404);
        }
    }
    public function render()
    {
        return view('livewire.home.services-details')->layout('layouts.home');
    }
}
