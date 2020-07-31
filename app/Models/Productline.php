<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productline extends Model
{
    protected $table ='productlines';
    



    protected $fillable =[
    'textDescription',
    'htmlDescription'

];

    protected function products()
{
    return $this->hasMany(Product::class,'product_line');
}

//     public function oderdetails()
// {
//     return $this->belongsToMany('App\Models\Oderdetail');
// }
protected $hidden =[
    
];


}