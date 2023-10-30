<?php

namespace Modules\Post\Core\Interfaces;

interface PostServiceInterface
{
    public function getAllPosts();

    public function getPostById(int $id);
}