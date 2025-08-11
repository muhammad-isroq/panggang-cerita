<?php

namespace App\Livewire;

use App\Models\Hero;
use App\Models\Story;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Cerita Kami')]

class CeritaKami extends Component
{
    public function render()
    {
        $heros = Hero::all();
        $storys = Story::all();
        return view('livewire.cerita-kami',[
           'heros' => $heros,
           'storys' => $storys,
    ]);
    }
}
