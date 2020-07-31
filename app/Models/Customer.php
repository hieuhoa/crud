<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table ='customers';
    protected $dataFormat="u";



//const CREATED_AT = 'customers_date';
//const UPDATED_AT = 'customers_lastdate';

protected $fillable =[
    'customersName',
    'customersLastName',
    'customersFirstName',
    'phone',
];
    protected function oders()
{
    return $this->hasMany(Oder::class);
}
    protected function employees()
{
    return $this->hasMany(Employee::class);
}
    protected function payments()
{
    return $this->hasMany(Payment::class);
}


protected $hidden =[];


}
