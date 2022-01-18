<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
   protected $fillable=['std_name','std_address'];
   protected $table="informations";
}
