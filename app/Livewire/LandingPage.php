<?php

namespace App\Livewire;

use App\Models\Hero;
use App\Models\Product;
use App\Models\Story;
use App\Models\Testimonial;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Beranda')]
class LandingPage extends Component
{
    public function render()
    {
        $heros = Hero::all();
        $featureds = Product::where('is_featured', true)->latest()->take(3)->get();
        $storys = Story::all();
        $testimonials = Testimonial::where('is_visible', true)->latest()->take(2)->get();

        return view('livewire.landing-page', [
            'heros' => $heros,
            'featureds' => $featureds,
            'storys' => $storys,
            'testimonials' => $testimonials,
        ]);
    }
}
