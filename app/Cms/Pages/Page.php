<?php

namespace App\Cms\Pages;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['name', 'title', 'description', 'excerpt', 'slug', 'perman_link', 'status', 'level', 'type_id'];
    protected $table = 'pages';

    public function types()
    {
        return $this->belongsTo(PageType::class, 'type_id');
    }
    
}
