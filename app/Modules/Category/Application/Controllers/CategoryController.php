<?php

namespace Modules\Category\Application\Controllers;

use Exception;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;
use Modules\Category\Application\Helpers\Services;
use Modules\Category\Core\Interfaces\CategoryServiceInterface;

class CategoryController extends BaseController
{
    use ResponseTrait;

    protected CategoryServiceInterface $service;

    public function __construct()
    {
        $this->service = Services::categoryServiceInterface();
    }

    public function listAllCategories(): ResponseInterface
    {
        return $this->respond(['data' => $this->service->getAllCategories()]);
    }

    /**
     * @param int $id
     * @return ResponseInterface
     * @throws Exception
     */
    public function getById(int $id): ResponseInterface
    {
        return $this->respond(['data' => $this->service->getCategoryById($id)]);
    }
}