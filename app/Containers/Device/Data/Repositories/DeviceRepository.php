<?php

namespace App\Containers\Device\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class DeviceRepository
 */
class DeviceRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name' => 'like',
        'user.username' => 'like',
        'user.realname' => 'like',
	    'address.parent_name' => 'like',
    ];

}
