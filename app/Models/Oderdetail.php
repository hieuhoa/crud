<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oderdetail extends Model
{
    protected $table ='oderdetails';

    protected $fillabe =[
        'order_number',
        'product_code',
        'quantily_odered',
        'price_each',
        'orderLine_number',
    ];
    
    protected function products()
{
    return $this->belongsToMany(Product::class,'products_codes');
}
    protected function product(){
    return $this->hasOne(Product::class,'products_codes');
    }       

    protected function oders()
{
    return $this->hasOne(Oder::class);
}
    

}
