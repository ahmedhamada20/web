<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Features extends Model
{
    use HasFactory;
    protected $fillable =[
        'title_ar',
        'title_en',
        'logo',
        'number',
        'columns',
    ];

    public function title()
    {
        return App::getLocale() == "ar"  ? $this->title_ar : $this->title_en;
    }
}
