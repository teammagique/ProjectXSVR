<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = [];

    // get the cutomer that wrote the review
    public function customer()
    {
        return $this->belongsTo(User::class );

    }

    // get the professional being reviewed
    public function professional()
    {
        return $this->belongsTo(User::class);
    }
    
}
