<?php

namespace Modules\Category\Core\Repositories;

use Modules\Category\Core\Entities\CategoryEntity;
use Modules\Category\Core\Interfaces\CategoryRepoInterface;

class CategoryRepo extends BaseRepo implements CategoryRepoInterface
{
    protected CategoryEntity $entity;

    public function __construct()
    {
        $this->entity = new CategoryEntity();
    }

    /**
     * @return array|null
     */
    public function getAllCategories(): ?array
    {
        return $this->entity->findAll();
    }

    public function getCategoryById(int $id) {
        return $this->entity->where(['id' => $id])->first();
    }
}