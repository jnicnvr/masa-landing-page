<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Title extends Component
{
    public $url = "http://139.180.188.149/img/masa_v1.apk";

    public function downloadApplication()
    {
        
        return redirect(url('http://139.180.188.149/img/masa_v1.apk'));
        
    }
    public function render()
    {
        return view('livewire.title');
    }
}
