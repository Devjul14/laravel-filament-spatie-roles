<?php

namespace App\Models;

use App\Models\services;
use App\Models\categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categories extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function parent()
    {
        return $this->belongsTo(categories::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(categories::class, 'parent_id');
    }

    public function services()
    {
        return $this->hasMany(services::class);
    }
}
