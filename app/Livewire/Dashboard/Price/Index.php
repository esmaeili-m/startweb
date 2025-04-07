<?php

namespace App\Livewire\Dashboard\Price;

use App\Models\Price;
use Livewire\Component;

class Index extends Component
{
    public $sort,$paginate_count=20;
    public function mount()
    {
        if (session()->has('message')){
            $this->dispatch('alert',icon:'success',message:session()->get('message'));
        }
    }

    public function UpdatedSort()
    {
        $counter = 1;
        foreach ($this->sort as $item) {
            Price::find($item)->update([
                'order' => $counter
            ]);
            $counter++;
        }
        $this->sort = [];
    }
    public function change_status($id)
    {
        $item=Price::find($id);
        if ($item->status){
            $item->update([
                'status'=>0
            ]);
        }else{
            $item->update([
                'status'=>1
            ]);
        }
        $this->dispatch('alert',icon:'success',message:'آیتم با موفقیت بروزرسانی شد');

    }

    public function delete($id)
    {
        Price::find($id)->delete();
        $this->dispatch('alert',icon:'success',message:'آیتم با موفقیت حذف شد');
    }


    public function render()
    {
        $data=Price::orderBy('order')->get();
        return view('livewire.dashboard.price.index',compact('data'));
    }
}
