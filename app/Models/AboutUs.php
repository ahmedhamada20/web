<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_ar',
        'title_en',
        'description_ar',
        'description_en',
        'show',
        'features_key',
        'features_value',
        'columns',
    ];

    public function title()
    {
        return App::getLocale() == "ar"  ? $this->title_ar : $this->title_en;
    }
    public function description()
    {
        return App::getLocale() == "ar"  ? $this->description_ar : $this->description_en;
    }
}
