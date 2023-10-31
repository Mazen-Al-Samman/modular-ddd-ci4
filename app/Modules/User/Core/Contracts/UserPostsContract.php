<?php

namespace Modules\User\Core\Contracts;

use Modules\Post\Core\Interfaces\PostServiceInterface;
use Modules\User\Core\Interfaces\UserServiceInterface;
use Modules\User\Core\Interfaces\Contracts\UserPostsContractInterface;

class UserPostsContract extends BaseContract implements UserPostsContractInterface
{
    protected PostServiceInterface $postService;
    protected UserServiceInterface $userService;

    public function __construct()
    {
        $this->postService = \Modules\Post\Application\Helpers\Services::postServiceInterface();
        $this->userService = \Modules\User\Application\Helpers\Services::userServiceInterface();
    }

    /**
     * @param int $userId
     * @return array|null
     */
    public function getUserPosts(int $userId): ?array
    {
        return $this->postService->getPostsByUserId($userId);
    }
}