<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'features_key',
        'features_value',
    ];

    public function service()
    {
        return $this->belongsTo(Services::class,'service_id');
    }
}
