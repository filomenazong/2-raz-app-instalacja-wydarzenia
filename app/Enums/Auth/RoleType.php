<?php

namespace App\Enums\Auth;

use app\Enums\Traits\EnumToArray;

enum RoleType: string
{
    use EnumToArray;

    case ADMIN = 'admin';
    case WORKER = 'worker';
    case USER = 'user';
}
