<?php

namespace App\Models;

use App\Models\orders;
use App\Models\services;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class service_images extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function service()
    {
        return $this->belongsTo(services::class);
    }

    public function orders()
    {
        return $this->hasMany(orders::class);
    }
}
