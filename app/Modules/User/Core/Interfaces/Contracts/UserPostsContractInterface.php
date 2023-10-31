<?php

namespace Modules\User\Core\Interfaces\Contracts;

interface UserPostsContractInterface
{
    public function getUserPosts(int $userId);
}