<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    
protected $table ='payments';

protected $fillabe = [
    'custome_number',
    'payment_date',
    'amount',
];

    protected function customers()
{
    return $this->hasOne(Customer::class);
}


}
