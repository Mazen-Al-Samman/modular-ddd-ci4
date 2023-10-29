<?php

namespace Modules\User\Core\Interfaces;

interface UserRepoInterface
{
    public function getVerifiedUsers();

    public function getActiveUsers();

    public function getBlockedUsers();
}