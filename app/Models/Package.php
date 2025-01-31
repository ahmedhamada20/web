<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_ar',
        'name_en',
    ];

    public function details()
    {
        return $this->hasMany(PackageDetail::class,'package_id');
    }

    public function name()
    {
        return App::getLocale() == "ar" ? $this->name_ar : $this->name_en;
    }
}
