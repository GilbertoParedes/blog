<?php

namespace App\Cms\Pages;

use Illuminate\Database\Eloquent\Model;

class PageType extends Model
{
    protected $fillable = ['name'];
    protected $table = 'page_types';
}
