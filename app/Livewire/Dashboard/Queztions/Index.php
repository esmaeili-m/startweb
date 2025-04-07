<?php

namespace App\Livewire\Dashboard\Queztions;

use App\Models\Queztions;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';
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
            Queztions::find($item)->update([
                'order' => $counter
            ]);
            $counter++;
        }
        $this->sort = [];
    }

    public function delete($id)
    {
        Queztions::find($id)->delete();
        $this->dispatch('alert',icon:'success',message:'آیتم با موفقیت حذف شد');
    }


    public function render()
    {
        $data=Queztions::orderBy('order')->paginate($this->paginate_count);
        return view('livewire.dashboard.queztions.index',compact('data'));
    }
}
