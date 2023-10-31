<?php

namespace Modules\Post\Core\Interfaces;

interface PostRepoInterface
{
    public function getAllPosts();

    public function getPostById(int $id);
    public function getByUserId(int $userId);
}