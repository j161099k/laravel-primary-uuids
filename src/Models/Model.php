<?php

namespace J1610\EloquentPrimaryUuids\Models;

use J1610\EloquentPrimaryUuids\Traits\UsesUuidPrimaryKey;
use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    use UsesUuidPrimaryKey;
}