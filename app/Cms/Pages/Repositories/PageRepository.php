<?php

namespace App\Cms\Pages\Repositories;

use App\Cms\BaseRepository\BaseRepository;
use App\Cms\Pages\Page;
use App\Cms\Pages\Repositories\PageRepositoryInterface;

class PageRepository extends BaseRepository implements PageRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        parent::__construct(Page::class);
    }

    public function pageByType()
    {
        return Page::all();
    }

}