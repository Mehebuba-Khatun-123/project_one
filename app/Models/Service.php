<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['service_name','service_slug','service_image','service_icon','short_description','long_description'];
   
}
?>
