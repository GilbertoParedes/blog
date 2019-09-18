<?php

namespace App\Cms\Pages\Repositories;

use App\Cms\BaseRepository\BaseRepositoryInterface;
use App\Cms\Pages\Page;


Interface PageRepositoryInterface extends BaseRepositoryInterface
{
    public function pageByType();
}