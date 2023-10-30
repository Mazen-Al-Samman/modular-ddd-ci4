<?php

namespace Modules\Post\Core\Entities;

class PostEntity extends BaseEntity
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $returnType = self::class;
    protected $useSoftDeletes = false;
    protected $allowedFields = ['name'];
    protected $useTimestamps = false;
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}