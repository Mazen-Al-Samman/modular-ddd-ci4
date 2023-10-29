<?php

namespace App\Models;

use App\Models\Relation\HasOne;

class Appointment extends BaseModel
{
    protected $DBGroup = 'default';
    protected $table = 'appointments';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = self::class;
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['unique_id', 'full_name', 'mobile_number', 'gender', 'date_of_birth', 'governorate', 'area', 'nationality', 'consultant_id', 'consultancy_type', 'case_description', 'session_date', 'session_timeslot', 'session_type', 'session_config', 'device_token', 'status',];

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

    /**
     * @param string $id
     * @return array|object|null
     */
    public static function getByUniqueId(string $id): object|array|null
    {
        return (new self())->with('consultant')->where(['unique_id' => $id])->first();
    }

    /**
     * @return HasOne
     */
    public function consultant(): Relation\HasOne
    {
        return $this->hasOne('consultant', Consultant::class, 'id', 'consultant_id');
    }
}
