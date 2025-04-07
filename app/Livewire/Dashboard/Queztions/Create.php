<?php

namespace App\Livewire\Dashboard\Queztions;

use App\Models\Queztions;
use Livewire\Component;

class Create extends Component
{
    public $title,$description;
    protected $rules=[
        'title'=>'required',
        'description' => 'required',
    ];
    protected $messages=[
        'title.required'=>' این فیلد الزامی می باشد',
        'description.required'=>'این فیلد الزامی می باشد',
    ];
    public function save()
    {
        $this->validate();
        Queztions::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'order'=>$this->get_order()
        ]);
        session()->flash('message',' سوال با موفقیت ایجاد شد');
        return redirect()->route('queztions.list');
    }

    public function get_order()
    {
        $max=Queztions::max('order');
        return $max == 0 ? $max=1 : $max+1;
    }
    public function render()
    {
        return view('livewire.dashboard.queztions.create');
    }
}
