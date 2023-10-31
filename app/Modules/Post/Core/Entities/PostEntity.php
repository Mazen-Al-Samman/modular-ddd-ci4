<?php

namespace Modules\Post\Core\Entities;

class PostEntity extends BaseEntity
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $returnType = self::class;
    protected $useSoftDeletes = false;
    protected $allowedFields = ['title', 'content', 'category_id', 'user_id'];
    protected $useTimestamps = false;
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}