<?php

namespace App\Models;

use App\Models\Major;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;



    protected $fillable = [
        'name',
        'city',
        'image',
        'major_id',
        'image',
        'title',
    ];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }





}
