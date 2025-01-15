<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Services extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_ar',
        'name_en',
        'description_ar',
        'description_en',
        'logo',
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
