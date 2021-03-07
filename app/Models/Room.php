<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $guarded = [];

    // get the messages in that room 
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    // get a room if there is no room with the customer and the professional
    public function getRoomOrCreate($customer, $professional)
    {
        $room = self::firstOrCreate([
            'customer-id'=>$customer,
            'professional_id'=>$professional
        ]);

        return $room;
    }
}
