<?php

namespace Modules\Category\Core\Interfaces;

interface CategoryRepoInterface
{
    public function getAllCategories();

    public function getCategoryById(int $id);
}