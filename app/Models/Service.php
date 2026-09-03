<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Testing\Fluent\Concerns\Has;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['service_name','service_slug','service_image','service_icon','short_description','long_description'];
   
}
?>
