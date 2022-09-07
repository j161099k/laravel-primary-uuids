<?php

namespace J1610\EloquentPrimaryUuids\Models;

use App\Traits\UsesUuidPrimaryKey;
use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    use UsesUuidPrimaryKey;
}