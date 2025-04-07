<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Services extends Component
{
    public $services;
    public function mount()
    {
        $this->services=\App\Models\Services::where('status',1)->get();
    }
    public function render()
    {
        return view('livewire.home.services')->layout('layouts.home');
    }
}
