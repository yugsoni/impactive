<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['user_id', 'theme_name', 'theme_category', 'theme_price', 'theme_discription', 'theme_img'];	
}
