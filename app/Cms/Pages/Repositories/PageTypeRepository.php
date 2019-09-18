<?php

namespace App\Cms\Pages\Repositories;

use App\Cms\BaseRepository\BaseRepository;
use App\Cms\Pages\PageType;
use App\Cms\Pages\Repositories\PageTypeRepositoryInterface;

class PageTypeRepository extends BaseRepository implements PageTypeRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        parent::__construct(PageType::class);
    }

    

}