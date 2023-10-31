<?php

namespace Modules\User\Application\Helpers;

use Modules\User\Core\Services\UserService;
use Modules\User\Core\Repositories\UserRepo;
use Modules\User\Core\Contracts\UserPostsContract;

class Services extends \Config\Services
{
    public static function userServiceInterface($getShared = true)
    {
        $sharedInstance = static::getSharedInstance('userServiceInterface');
        if ($getShared && !empty($sharedInstance)) return $sharedInstance;
        return new UserService();
    }

    public static function userRepoInterface($getShared = true)
    {
        $sharedInstance = static::getSharedInstance('userRepoInterface');
        if ($getShared && !empty($sharedInstance)) return $sharedInstance;
        return new UserRepo();
    }

    public static function userPostContractInterface($getShared = true)
    {
        $sharedInstance = static::getSharedInstance('userPostContractInterface');
        if ($getShared && !empty($sharedInstance)) return $sharedInstance;
        return new UserPostsContract();
    }
}