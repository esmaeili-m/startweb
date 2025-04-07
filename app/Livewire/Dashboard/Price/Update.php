<?php

namespace App\Livewire\Dashboard\Price;

use App\Models\Price;
use Livewire\Component;

class Update extends Component
{
    public $plan,$title,$description,$parent_id,$slug,$featurs,$price,$featur;
    public function mount($id)
    {
        $this->plan=Price::find($id);
        $this->title=$this->plan->title;
        $this->description=$this->plan->description;
        $this->parent_id=$this->plan->parent_id;
        $this->slug=$this->plan->slug;
        $this->price=$this->plan->price;
        $this->featurs=$this->plan->features;
    }
    public function rules()
    {
        return [
            'title' =>  'required',
            'price' =>  'required',
            'slug' =>  'required | unique:prices,slug,'.$this->plan->id,
        ];
    }

    public function messages()
    {
        return [
            'title' => 'فیلد عنوان الزامی است',
            'price' => 'فیلد قیمت الزامی است',
            'slug.required' => 'فیلد لینک الزامی است',
            'slug.unique' => 'فیلد لینک از قبل انتخاب شده است',
        ];
    }
    public function UpdatedSlug()
    {
        $this->slug=str_replace(' ','-',$this->slug);
    }
    public function save()
    {
        $this->validate();
        if ($this->parent_id == ''){
            $this->parent_id = null;
        }
        $this->plan->update([
           'title' => $this->title,
           'description' => $this->description,
           'parent_id' => $this->parent_id,
           'slug' => $this->slug,
           'price' => $this->price,
           'features' => $this->featurs,
        ]);
        return redirect()->route('price.list');
    }
    public function add_feature()
    {
        $this->featurs[]=$this->featur;
        $this->featur='';
    }
    public function remove_feature($key)
    {
        unset($this->featurs[$key]);
    }
    public function render()
    {
        return view('livewire.dashboard.price.update');
    }
}
