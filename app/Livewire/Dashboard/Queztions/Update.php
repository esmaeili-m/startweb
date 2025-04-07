<?php

namespace App\Livewire\Dashboard\Queztions;

use App\Models\Queztions;
use Livewire\Component;

class Update extends Component
{
    public $title,$description,$queztion;
    protected $rules=[
        'title'=>'required',
        'description' => 'required',
    ];
    protected $messages=[
        'title.required'=>' این فیلد الزامی می باشد',
        'description.required'=>'این فیلد الزامی می باشد',
    ];

    public function mount($id)
    {
        $this->queztion = Queztions::find($id);
        $this->title = $this->queztion->title;
        $this->description = $this->queztion->description;
    }
    public function save()
    {
        $this->validate();
        $this->queztion->update([
            'title'=>$this->title,
            'description'=>$this->description,
        ]);
        session()->flash('message',' سوال با موفقیت ویرایش شد');
        return redirect()->route('queztions.list');
    }

    public function render()
    {
        return view('livewire.dashboard.queztions.update');
    }
}
