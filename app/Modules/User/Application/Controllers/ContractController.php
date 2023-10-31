<?php

namespace Modules\User\Application\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;
use Modules\User\Application\Helpers\Services;
use Modules\User\Core\Interfaces\Contracts\UserPostsContractInterface;

class ContractController extends BaseController
{
    use ResponseTrait;

    protected UserPostsContractInterface $userPostsContract;

    public function __construct()
    {
        $this->userPostsContract = Services::userPostContractInterface();
    }

    /**
     * @param int $userId
     * @return ResponseInterface
     */
    public function getUserPosts(int $userId): ResponseInterface
    {
        return $this->respond($this->userPostsContract->getUserPosts($userId));
    }
}