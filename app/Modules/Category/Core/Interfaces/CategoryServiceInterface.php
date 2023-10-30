<?php

namespace Modules\Category\Core\Interfaces;

interface CategoryServiceInterface
{
    public function getAllCategories();

    public function getCategoryById(int $id);
}