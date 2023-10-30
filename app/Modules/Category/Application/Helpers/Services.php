<?php

namespace Modules\Category\Application\Helpers;

use Modules\Category\Core\Services\CategoryService;
use Modules\Category\Core\Repositories\CategoryRepo;

class Services extends \Config\Services
{
    public static function categoryServiceInterface($getShared = true)
    {
        $sharedInstance = static::getSharedInstance('userServiceInterface');
        if ($getShared && !empty($sharedInstance)) return $sharedInstance;
        return new CategoryService();
    }

    public static function categoryRepoInterface($getShared = true)
    {
        $sharedInstance = static::getSharedInstance('categoryRepoInterface');
        if ($getShared && !empty($sharedInstance)) return $sharedInstance;
        return new CategoryRepo();
    }
}