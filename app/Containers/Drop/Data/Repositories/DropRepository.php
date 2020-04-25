<?php

namespace App\Containers\Drop\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class DropRepository
 */
class DropRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
	    'device.name' => 'like',
    	'user.realname' => 'like',
    	'user.username' => 'like',
        'customer.realname' => 'like',
        'customer.nickname' => 'like',
        'ljlx.name' => 'like',
        'ljxl.name' => 'like',
        'jlbz.name' => 'like',
    ];

}
