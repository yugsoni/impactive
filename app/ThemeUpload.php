<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThemeUpload extends Model
{
    
    protected $fillable = [
        'theme_name',
        'category_select',
        'theme_price',
        'theme_description',
        'image-upload',
        'file-upload',
        'created_at',
		'updated_at',
    ],
    $dates = [
        'created_at',
        'updated_at',
    ];
}
