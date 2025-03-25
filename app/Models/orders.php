<?php

namespace App\Models;

use App\Models\User;
use App\Models\reviews;
use App\Models\services;
use App\Models\revisions;
use App\Models\deliveries;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class orders extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function service()
    {
        return $this->belongsTo(services::class);
    }

    public function servicePackage()
    {
        return $this->belongsTo(service_packages::class);
    }

    public function deliveries()
    {
        return $this->hasMany(deliveries::class);
    }

    public function revisions()
    {
        return $this->hasMany(revisions::class);
    }

    public function review()
    {
        return $this->hasOne(reviews::class);
    }

    public function transaction()
    {
        return $this->hasOne(transactions::class);
    }
}
