<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class create_category extends Model
{
	
    protected $fillable = [
        'category',
        'created_at',
		'updated_at',
    ],
    $dates = [
        'created_at',
        'updated_at',
    ];
}
