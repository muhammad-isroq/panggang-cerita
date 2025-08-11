<?php

namespace App\Livewire;

use App\Models\Hero;
use App\Models\Setting;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Lokasi & Kontak')]

class LokasiKontak extends Component
{
    public function render()
    {   
        $heros = Hero::all();
        $settings = Setting::all();
        return view('livewire.lokasi-kontak',[
            'heros' => $heros,
            'settings' => $settings,
        ]);
    }
}
