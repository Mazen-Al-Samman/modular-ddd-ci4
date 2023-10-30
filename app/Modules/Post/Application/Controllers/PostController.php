<?php

namespace Modules\Post\Application\Controllers;

use Exception;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;
use Modules\Post\Application\Helpers\Services;
use Modules\Post\Core\Interfaces\PostServiceInterface;

class PostController extends BaseController
{
    use ResponseTrait;

    protected PostServiceInterface $service;

    public function __construct()
    {
        $this->service = Services::postServiceInterface();
    }

    public function listAllPosts(): ResponseInterface
    {
        return $this->respond(['data' => $this->service->getAllPosts()]);
    }

    /**
     * @param int $id
     * @return ResponseInterface
     * @throws Exception
     */
    public function getById(int $id): ResponseInterface
    {
        return $this->respond(['data' => $this->service->getPostById($id)]);
    }
}