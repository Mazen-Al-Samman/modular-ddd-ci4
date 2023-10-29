<?php

namespace Modules\User\Core\Services;

use Modules\User\Application\Helpers\Services;
use Modules\User\Core\Interfaces\UserRepoInterface;
use Modules\User\Core\Interfaces\UserServiceInterface;

class UserService extends BaseService implements UserServiceInterface
{
    protected UserRepoInterface $repo;

    public function __construct()
    {
        $this->repo = Services::userRepoInterface();
    }

    /**
     * @return array
     */
    public function getUsersStatistics(): array
    {
        $data = [
            'active' => $this->repo->getActiveUsers(),
            'blocked' => $this->repo->getBlockedUsers(),
            'verified' => $this->repo->getVerifiedUsers(),
        ];

        $activeCount = count($data['active']);
        $blockedCount = count($data['blocked']);
        $verifiedCount = count($data['verified']);
        $totalCount = $activeCount + $blockedCount + $verifiedCount;

        return [
            'active' => $this->convertToPercentage($activeCount, $totalCount),
            'blocked' => $this->convertToPercentage($blockedCount, $totalCount),
            'verified' => $this->convertToPercentage($verifiedCount, $totalCount),
        ];
    }

    /**
     * @param $count
     * @param $totalCount
     * @return float|int
     */
    private function convertToPercentage($count, $totalCount)
    {
        return ($count / $totalCount) * 100;
    }
}