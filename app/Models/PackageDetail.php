<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class PackageDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_id',
        'name_ar',
        'name_en',
        'title_ar',
        'title_en',
        'description_ar',
        'description_en',
    ];

    public function name()
    {
        return App::getLocale() == "ar" ? $this->name_ar : $this->name_en;
    }
    public function title()
    {
        return App::getLocale() == "ar" ? $this->title_ar : $this->title_ar;
    }

    public function description()
    {
        return App::getLocale() == "ar" ? $this->description_ar : $this->description_en;
    }
}
