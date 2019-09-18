<?php

namespace App\Cms\Pages;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['name', 'title', 'description', 'excerpt', 'slug', 'status', 'level', 'type_id'];
    protected $table = 'pages';
    
}
