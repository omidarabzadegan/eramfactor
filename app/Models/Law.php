<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Law extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
