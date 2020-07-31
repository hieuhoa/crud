<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    //
    protected $table ='oders';

    protected $filltable =[
        'order_number',
        'order_date',
        'required_date',
        'shipped_date',
        'status',
        'comments',
        'customer_number',
    ];
    protected function oderdetails() {
        return $this->hasMany(Odedetail::class);
    }
    protected function customers() {
        return $this->hasOne(Customer::class);
    }
    //     public function employees() {
    //     return $this->belongsToMany(Employee::class);
    // }
    // public function salesRepToCust() {
    //     return $this->hasMany(Customer::class, 'salesRepCustomerId');
    // }
}
