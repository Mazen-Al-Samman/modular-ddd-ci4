<?php

namespace App\Models;

use CodeIgniter\Model;

class Consultant extends BaseModel
{
    protected $DBGroup = 'default';
    protected $table = 'consultants';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = self::class;
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['full_name', 'designation', 'education', 'qualifications', 'experience', 'workplace', 'avatar', 'status', 'gender',];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];
}
