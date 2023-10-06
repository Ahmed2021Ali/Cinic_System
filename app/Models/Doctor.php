<?php

namespace App\Models;

use App\Models\Major;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Doctor extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'doctor';

    protected $fillable = [
        'name',
        'phone',
        'city',
        'image',
        'major_id',
        'email',
        'password',
    ];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    protected $hidden = [
        'password', 'remember_token',
      ];


}
