<?php

namespace Modules\Category\Core\Entities;

class CategoryEntity extends BaseEntity
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $returnType = self::class;
    protected $useSoftDeletes = false;
    protected $allowedFields = ['name'];
    protected $useTimestamps = false;
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}