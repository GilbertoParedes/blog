<?php

namespace App\Cms\BaseRepository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

//use Illuminate\Http\Request;

Interface BaseRepositoryInterface
{
    public function all();
    public function create($params);

}