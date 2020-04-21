<?php

namespace App\Containers\Dict\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class DictRepository
 */
class DictRepository extends Repository
{

  /**
   * @var array
   */
  protected $fieldSearchable = [
    'id' => '=',
    // ...
  ];

}
