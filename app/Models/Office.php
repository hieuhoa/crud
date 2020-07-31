<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
protected $table ='offices';


protected $fillabe = [
    'city',
    'phone',
    'addressLine1',
    'addressLine2',
    'state',
    'country',
    'postalCode',
    'territory',

 ];
 
 protected function employees()
 {
     return $this->hasMany(Employee::class);
 }
 


}
