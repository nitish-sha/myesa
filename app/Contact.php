<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{

    protected $fillable = ['name', 'email', 'mobile_number','created_at','updated_at'];
	
	
	
}

?>