<?php

namespace Modules\User\Core\Entities;

class UserEntity extends BaseEntity
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $returnType = self::class;
    protected $useSoftDeletes = false;
    protected $allowedFields = ['name', 'email', 'password'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}