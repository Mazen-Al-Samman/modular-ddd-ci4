<?php

namespace Modules\User\Core\Entities;

use App\Models\Relation\HasOne;
use Modules\User\Core\ValueObjects\UserDetails;

class UserEntity extends BaseEntity
{
    const STATUS_ACTIVE = 'active';
    const STATUS_BLOCKED = 'blocked';
    const STATUS_VERIFIED = 'verified';

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

    /**
     * @return HasOne
     */
    public function details(): HasOne
    {
        return $this->hasOne('details', UserDetails::class, 'user_id', 'id');
    }
}