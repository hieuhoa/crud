<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
    protected $fillable = [
        'products_codes',
        'product_name',
        'product_line',
        'product_scale',
        'product_vendor',
        'product_description',
        'quanitily_inStock',
        'buy_price',
        'MSRP',
    ];
    protected function productlines()
{
    return $this->belongsTo(Productline::class,'product_line');

 }
    protected function productline()
 {
     return $this->hasOne(Oderdetail::class,'product_line');
 }

    protected function oderdetails()
{
    return $this->hasMany(Oderdetail::class,'products_codes');
}
    
    protected function oderdetail()
{
    return $this->belongsTo(Oderdetail::class,'products_codes');
}
  

}
