<?php

namespace App\Enums\Auth;

use App\Enums\Traits\EnumToArray;

enum PermissionType: string
{
    use EnumToArray;

    case USER_ACCESS = 'user_access';
    case USER_MANAGE = 'user_manage';

   // case RENTEDROOM_ACCESS = 'rentedrooms_access';
    // case RENTEDROOM_MANAGE = 'rentedrooms_manage';

    case EQUIPMENT_ACCESS = 'equipment_access';
    case EQUIPMENT_MANAGE = 'equipment_manage';

    // case RENTALLOG_ACCESS  = 'rentallog_access';
    // case RENTALLOG_MANAGE = 'rentallog_manage';


}
