<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // get user that created payment

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // helper function to create payments since they will not be created through a view
    public static function createPayment($amount, $code, $user)
    {
        $payment = new Payment();
        $payment->user_id = $user;
        $payment->transaction_code=$code;
        $payment->amount = $amount;
        $payment->save();
        return $payment;
    }
}
