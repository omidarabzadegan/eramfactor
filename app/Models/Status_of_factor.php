<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_of_factor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function factor()
    {
        return $this->belongsTo(Factor::class);
    }
}
