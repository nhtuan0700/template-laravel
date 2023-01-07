<?php

namespace App\Repositories\Eloquents;

use App\Models\User;
use App\Repositories\Base\Eloquents\BaseRepository;
use App\Repositories\Interfaces\IUserRepository;

class UserRepository extends BaseRepository implements IUserRepository
{
    public function getModel()
    {
        return User::class;
    }
}
