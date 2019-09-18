<?php

namespace App\Cms\Users\Repositories;

use App\Cms\BaseRepository\BaseRepository;
use App\Cms\Users\User;
use App\Cms\Users\Repositories\UserRepositoryInterface;



class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        parent::__construct(User::class);
    }

}