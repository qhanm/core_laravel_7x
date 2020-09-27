<?php
namespace App\Http\Constants;

class QPermission
{
    // User
    const USER_LIST = 'user.list';
    const USER_EDIT = 'user.edit';
    const USER_UPDATE = 'user.update';
    const USER_DELETE = 'user.delete';

    // Permission
    const PERMISSION_LIST = 'permission.list';
    const PERMISSION_EDIT = 'permission.edit';
    const PERMISSION_UPDATE = 'permission.update';
    const PERMISSION_DELETE = 'permission.delete';

    // Role
    const ROLE_LIST = 'role.list';
    const ROLE_EDIT = 'role.edit';
    const ROLE_UPDATE = 'role.update';
    const ROLE_DELETE = 'role.delete';

    public static function getList()
    {
        return [
            // User
            self::USER_LIST, self::USER_EDIT, self::USER_UPDATE, self::USER_DELETE,

            // Permission
            self::PERMISSION_LIST, self::PERMISSION_EDIT, self::PERMISSION_UPDATE, self::PERMISSION_DELETE,

            // Role
            self::ROLE_LIST, self::ROLE_EDIT, self::ROLE_DELETE,
        ];
    }
}
