<?php

namespace Modules\User\Core\ValueObjects;

class UserDetails extends BaseValueObject
{
    protected $table = 'user_details';
    protected $primaryKey = 'id';
    protected $returnType = self::class;
    protected $useSoftDeletes = false;
    protected $allowedFields = ['user_token', 'status'];
    protected $useTimestamps = false;
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}