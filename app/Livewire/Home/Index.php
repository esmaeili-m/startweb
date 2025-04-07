<?php

namespace App\Livewire\Home;

use App\Models\MessagesClient;
use App\Models\Price;
use Livewire\Component;

class Index extends Component
{
    public $plans,$plan,$phone;

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
    public function render()
    {
        return view('livewire.home.index')->layout('layouts.home');
    }
}
