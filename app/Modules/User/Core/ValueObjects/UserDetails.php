<?php

namespace Modules\User\Core\ValueObjects;

use App\Models\Relation\BelongsTo;
use Modules\User\Core\Entities\UserEntity;

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

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo('user', UserEntity::class, 'user_id');
    }
}