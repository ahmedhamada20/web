<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_ar',
        'name_en',
        'logo',
        'description_ar',
        'description_en',
        'address_ar',
        'address_en',
        'phone',
        'email',
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'whatsapp_url',
        'location_lat',
        'location_lan',
        'columns',
    ];

    public function name()
    {
        return App::getLocale() == "ar"  ? $this->name_ar : $this->name_en;
    }
    public function description()
    {
        return App::getLocale() == "ar"  ? $this->description_ar : $this->description_en;
    }
}
