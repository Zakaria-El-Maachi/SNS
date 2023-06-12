<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class craftsman extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_address',
        'description',
        'image',
    ];

    public function requests()
    {
        return $this->hasMany(request::class);
    }

    public function availabilities()
    {
        return $this->hasMany(availability::class);
    }

    public function services()
    {
        return $this->hasManyThrough(service::class, CraftsmanService::class, 'craftsman_id', 'id', 'id', 'service_id');
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
