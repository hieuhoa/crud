<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Faker\Generator as Faker;
//use App\Models;
class Employee extends Model
{

    protected $table='employees';
    //protected $dataFormat='u';

//const CREATED_AT = 'creation_date';
//const UPDATED_AT = 'last_update';




protected $fillable =[
    'last_name',
    'first_name',
    'extension',
    'email',
    'office_code',
   'reports_to',
   'job_title',


];


//     protected function orders()
// {
//     return $this->belongsToMany(Order::class);
// }

    protected function customers()
{
    return $this->hasMany(Customer::class);
}
    protected function offices()
{
    return $this->hasOne(Office::class);
}       
protected $hidden =[
   

];

}

