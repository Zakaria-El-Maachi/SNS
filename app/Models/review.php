<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    public function craftsman()
    {
        return $this->belongsTo(craftsman::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
