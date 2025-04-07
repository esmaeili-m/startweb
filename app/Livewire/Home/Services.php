<?php

namespace App\Livewire\Home;

use App\Models\MessagesClient;
use Livewire\Component;

class Services extends Component
{
    public $services,$phone;
    public function save()
    {
        $this->validate(
            ['phone' => 'required|regex:/^09[0-9]{9}$/'],
            [
                'phone.required' => 'وارد کردن شماره موبایل الزامی است',
                'phone.regex' => 'شماره موبایل معتبر نیست (فرمت صحیح: 09123456789)'
            ]
        );
        $user_name='کاربر نیاز به مشاوره';
        MessagesClient::create([
            'name' =>$user_name,
            'phone' => $this->phone
        ]);
        $this->phone=null;
        session()->flash('message','شماره همراه شما با موفقیت ثبت شد.');
    }
    public function mount()
    {
        $this->services=\App\Models\Services::where('status',1)->get();
    }
    public function render()
    {
        return view('livewire.home.services')->layout('layouts.home');
    }
}
