<?php

namespace App\Livewire\Dashboard\Price;

use App\Models\Price;
use Livewire\Component;

class Trash extends Component
{
    public function delete($id)
    {
        $item=Price::onlyTrashed()->find($id);
        $item->forceDelete();
        $this->dispatch('alert',icon:'success',message:'آیتم با موفقیت حذف شد');
    }
    public function restore($id)
    {
        Price::onlyTrashed()->find($id)->restore();
        $this->dispatch('alert',icon:'success',message:'آیتم با موفقیت بازگردانی شد');
    }
    public function render()
    {
        $data=Price::onlyTrashed()->get();
        return view('livewire.dashboard.price.trash',compact('data'));
    }
}
