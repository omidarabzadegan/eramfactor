<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function device()
    {
        return $this->hasOne(Device::class);
    }
        /**
     * Get the Users relationship.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status_of_factor()
    {
        return $this->hasOne(Status_of_factor::class);
    }

    public function customer()
    {
        return $this->belongsTo(customer::class);
    }
}
