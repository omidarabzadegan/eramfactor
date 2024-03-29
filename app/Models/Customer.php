<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function factor()
    {
        return $this->hasMany(Factor::class);
    }

     /**
     * Get the Users relationship.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
