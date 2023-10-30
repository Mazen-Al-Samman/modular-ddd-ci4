<?php

namespace Modules\Category\Core\Services;

use Exception;
use Modules\Category\Application\Helpers\Services;
use Modules\Category\Core\Interfaces\CategoryRepoInterface;
use Modules\Category\Core\Interfaces\CategoryServiceInterface;

class CategoryService extends BaseService implements CategoryServiceInterface
{
    protected CategoryRepoInterface $repo;

    public function __construct()
    {
        $this->repo = Services::categoryRepoInterface();
    }

    /**
     * @return array|null
     */
    public function getAllCategories(): ?array
    {
        return $this->repo->getAllCategories();
    }

    /**
     * @throws Exception
     */
    public function getCategoryById(int $id)
    {
        $categoryModel = $this->repo->getCategoryById($id);
        if (empty($categoryModel)) throw new Exception("Category $id Not Found", 404);
        return $categoryModel;
    }
}