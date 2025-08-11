<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\LandingPage;
use App\Livewire\CeritaKami;
use App\Livewire\Menu;
use App\Livewire\LokasiKontak;


Route::get('/', LandingPage::class)->name('/');
Route::get('/cerita-kami', CeritaKami::class)->name('cerita-kami');
Route::get('/menu', Menu::class)->name('menu');
Route::get('/lokasi-kontak', LokasiKontak::class)->name('lokasi-kontak');
