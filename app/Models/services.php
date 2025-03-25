<?php

namespace App\Models;

use packages;
use App\Models\orders;
use App\Models\reviews;
use App\Models\sellers;
use App\Models\categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class services extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function seller()
    {
        return $this->belongsTo(sellers::class);
    }

    public function category()
    {
        return $this->belongsTo(categories::class);
    }

    public function packages()
    {
        return $this->hasMany(service_packages::class);
    }

    public function images()
    {
        return $this->hasMany(service_images::class);
    }

    public function orders()
    {
        return $this->hasMany(orders::class);
    }

    public function reviews()
    {
        return $this->hasMany(reviews::class);
    }
}
