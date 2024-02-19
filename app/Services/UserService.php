<?php

namespace App\Services;

use Exception;
use App\Repositories\FileRepository;
use App\Repositories\FormRepository;
use App\Repositories\UserRepository;

class UserService
{
    private $repository_user;

    public function __construct(UserRepository $repository_user)
    {
        $this->repository_user = $repository_user;
    }


    //$this->model
    //(file, 'files/empresa')t

}
