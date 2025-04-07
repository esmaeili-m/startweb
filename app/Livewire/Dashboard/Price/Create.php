<?php

namespace App\Livewire\Dashboard\Price;

use App\Models\Price;
use Livewire\Component;

class Create extends Component
{
    public $title,$description,$featur,$featurs,$slug,$parent_id,$price;

    public function rules()
    {
        return [
          'title' =>  'required',
          'price' =>  'required',
          'slug' =>  'required | unique:prices,slug',
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
    public function get_order()
    {
        $max=Price::max('order');
        return $max == 0 ? $max=1 : $max+1;
    }
    public function save()
    {
        $this->validate();
        if ($this->parent_id == ''){
            $this->parent_id = null;
        }
        Price::create([
            'title' => $this->title,
            'description' => $this->title,
            'parent_id' => $this->parent_id,
            'slug' => $this->slug,
            'price' => $this->price,
            'features' => $this->featurs,
        ]);
        session()->flash('message','پلن با موفقیت ایجاد شد');
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
        return view('livewire.dashboard.price.create');
    }
}
