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
        'id' => '=',
        // ...
    ];

}
