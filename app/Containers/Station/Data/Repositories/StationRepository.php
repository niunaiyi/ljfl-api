<?php

namespace App\Containers\Station\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class StationRepository
 */
class StationRepository extends Repository
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
