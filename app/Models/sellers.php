<?php

namespace App\Models;

use App\Models\User;
use App\Models\services;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class sellers extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function services()
    {
        return $this->hasMany(services::class);
    }
}
