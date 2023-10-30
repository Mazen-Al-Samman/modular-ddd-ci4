<?php

namespace Modules\Post\Core\Repositories;

use Modules\Post\Core\Entities\PostEntity;
use Modules\Post\Core\Interfaces\PostRepoInterface;

class PostRepo extends BaseRepo implements PostRepoInterface
{
    protected PostEntity $entity;

    public function __construct()
    {
        $this->entity = new PostEntity();
    }

    /**
     * @return array|null
     */
    public function getAllPosts(): ?array
    {
        return $this->entity->findAll();
    }

    public function getPostById(int $id) {
        return $this->entity->where(['id' => $id])->first();
    }
}