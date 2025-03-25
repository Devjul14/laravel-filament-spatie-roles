<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\chats;
use App\Models\orders;
use App\Models\reviews;
use App\Models\sellers;
use App\Models\profiles;
use App\Models\notifications;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne(profiles::class);
    }

    public function seller()
    {
        return $this->hasOne(sellers::class);
    }

    public function orders()
    {
        return $this->hasMany(orders::class, 'buyer_id');
    }

    public function reviews()
    {
        return $this->hasMany(reviews::class);
    }

    public function sentChats()
    {
        return $this->hasMany(chats::class, 'sender_id');
    }

    public function receivedChats()
    {
        return $this->hasMany(chats::class, 'receiver_id');
    }

    public function notifications()
    {
        return $this->hasMany(notifications::class);
    }
}
