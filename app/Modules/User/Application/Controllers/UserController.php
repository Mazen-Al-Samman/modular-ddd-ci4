<?php

namespace Modules\User\Application\Controllers;

use Modules\User\Core\Services\UserService;
use Modules\User\Core\Interfaces\UserServiceInterface;

class UserController extends BaseController
{
    protected UserServiceInterface $service;

    public function __construct()
    {
        $this->service = new UserService();
    }

    /**
     * @return string
     */
    public function getStatistics(): string
    {
        return view($this->viewPath . 'statistics', ['data' => $this->service->getUsersStatistics()]);
    }
}