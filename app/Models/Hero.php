<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = ['image', 'title1', 'title2', 'hero_cerita', 'hero_menu', 'hero_lokasi'];
}
