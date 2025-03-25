<?php

namespace App\Models;

use App\Models\orders;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class transactions extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    
    public function order()
    {
        return $this->belongsTo(orders::class);
    }

}
