<?php

namespace App\Service;

use App\BO\UserBO;

class UserService
{
    protected $userBO;
    /**
     * Create a new class instance.
     */
    public function __construct(UserBO $userBO)
    {
        $this->userBO = $userBO;
    }

    public function createUser($data){
        return $this->userBO->createUser($data);
    }

    public function updateUser($id,$data){
        return $this->userBO->updateUser($id,$data);
    }
}
