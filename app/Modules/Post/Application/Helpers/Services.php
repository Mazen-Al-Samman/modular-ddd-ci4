<?php

namespace Modules\Post\Application\Helpers;

use Modules\Post\Core\Services\PostService;
use Modules\Post\Core\Repositories\PostRepo;

class Services extends \Config\Services
{
    public static function postServiceInterface($getShared = true)
    {
        $sharedInstance = static::getSharedInstance('postServiceInterface');
        if ($getShared && !empty($sharedInstance)) return $sharedInstance;
        return new PostService();
    }

    public static function postRepoInterface($getShared = true)
    {
        $sharedInstance = static::getSharedInstance('postRepoInterface');
        if ($getShared && !empty($sharedInstance)) return $sharedInstance;
        return new PostRepo();
    }
}