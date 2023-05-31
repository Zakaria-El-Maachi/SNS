<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class craftsman extends Model
{
    use HasFactory;


    public function requests()
    {
        return $this->hasMany(request::class);
    }

    public function availabilities()
    {
        return $this->hasMany(availability::class);
    }

    public function reviews()
    {
        return $this->hasMany(review::class);
    }

    public function services()
    {
        return $this->belongsToMany(service::class);
    }
}
