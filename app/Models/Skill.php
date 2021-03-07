<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name',
        'category_id'
    ];

    // returns the category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function profiles()
    {
        return $this->belongsToMany(Profile::class);
    }

   
}
