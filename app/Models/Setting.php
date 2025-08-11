<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['alamat', 'lokasi', 'no_hp', 'whatsapp', 'email', 'opening_hours_weekday', 'opening_hours_weekend', 'instagram', 'facebook', 'tiktok'];
}
