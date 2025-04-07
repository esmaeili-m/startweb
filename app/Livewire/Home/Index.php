<?php

namespace App\Livewire\Home;

use App\Models\Price;
use Livewire\Component;

class Index extends Component
{
    public $plans,$plan;

    public function remove_html($text)
    {
        return strip_tags(html_entity_decode($text, ENT_QUOTES, 'UTF-8'));
    }

    public function mount()
    {
        $this->plan=Price::orderBy('order')->first();
        $this->plans = Price::where('parent_id',$this->plan?->id)->orderBy('order')->get();
    }
    public function get_plans($id)
    {
        $this->plan=Price::find($id);
        $this->plans = Price::where('parent_id',$id)->orderBy('order')->get();
    }
    public function render()
    {
        return view('livewire.home.index')->layout('layouts.home');
    }
}
