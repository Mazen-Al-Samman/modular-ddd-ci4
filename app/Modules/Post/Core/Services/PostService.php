<?php

namespace Modules\Post\Core\Services;

use Exception;
use Modules\Post\Application\Helpers\Services;
use Modules\Post\Core\Interfaces\PostRepoInterface;
use Modules\Post\Core\Interfaces\PostServiceInterface;

class PostService extends BaseService implements PostServiceInterface
{
    protected PostRepoInterface $repo;

    public function __construct()
    {
        $this->repo = Services::postRepoInterface();
    }

    /**
     * @return array|null
     */
    public function getAllPosts(): ?array
    {
        return $this->repo->getAllPosts();
    }

    /**
     * @throws Exception
     */
    public function getPostById(int $id)
    {
        $postModel = $this->repo->getPostById($id);
        if (empty($postModel)) throw new Exception("Post $id Not Found", 404);
        return $postModel;
    }

    /**
     * @param int $userId
     * @return array|null
     */
    public function getPostsByUserId(int $userId): ?array
    {
        return $this->repo->getByUserId($userId);
    }
}