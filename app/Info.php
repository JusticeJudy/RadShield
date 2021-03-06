<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table='info';
    protected $fillable=array('name','company','email','message','floorplan');
    protected $casts= [
    		'floorplan'=>'array',
    ];
}
