<?php

namespace App\Models;

use App\Models\services;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class service_packages extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function service()
    {
        return $this->belongsTo(services::class);
    }
}
