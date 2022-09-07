<?php

namespace J1610\EloquentPrimaryUuids\Auth;

use J1610\EloquentPrimaryUuids\Traits\UsesUuidPrimaryKey;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use UsesUuidPrimaryKey;
}