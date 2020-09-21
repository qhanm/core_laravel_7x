<?php
namespace App\Models\Auth;

use App\Components\CModel;
use Kyslik\ColumnSortable\Sortable;

class User extends CModel
{
    use Sortable;

    public $sortable = [
        'id',
        'name',
        'username',
        'email'
    ];
}
