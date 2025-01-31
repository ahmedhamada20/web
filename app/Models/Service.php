<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_ar',
        'name_en',

    ];


    public function name()
    {
        return App::getLocale() == "ar" ? $this->name_ar : $this->name_en;
    }

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
}
