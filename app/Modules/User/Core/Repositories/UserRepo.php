<?php

namespace Modules\User\Core\Repositories;

use Modules\User\Core\Entities\UserEntity;
use Modules\User\Core\Interfaces\UserRepoInterface;

class UserRepo extends BaseRepo implements UserRepoInterface
{
    protected UserEntity $entity;

    public function __construct()
    {
        $this->entity = new UserEntity();
    }

    /**
     * @return array|null
     */
    public function getVerifiedUsers(): ?array
    {
        return $this->entity
            ->join('user_details', 'user_details.user_id = users.id')
            ->where(['user_details.status' => $this->entity::STATUS_VERIFIED])->findAll();
    }

    /**
     * @return array|null
     */
    public function getActiveUsers(): ?array
    {
        return $this->entity
            ->join('user_details', 'user_details.user_id = users.id')
            ->where(['user_details.status' => $this->entity::STATUS_ACTIVE])->findAll();
    }

    /**
     * @return array|null
     */
    public function getBlockedUsers(): ?array
    {
        return $this->entity
            ->join('user_details', 'user_details.user_id = users.id')
            ->where(['user_details.status' => $this->entity::STATUS_BLOCKED])->findAll();
    }
}