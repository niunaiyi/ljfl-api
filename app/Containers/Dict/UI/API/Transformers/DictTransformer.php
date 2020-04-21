<?php

namespace App\Containers\Dict\UI\API\Transformers;

use App\Containers\Dict\Models\Dict;
use App\Ship\Parents\Transformers\Transformer;

class DictTransformer extends Transformer
{
  /**
   * @var  array
   */
  protected $defaultIncludes = [

  ];

  /**
   * @var  array
   */
  protected $availableIncludes = [

  ];

  /**
   * @param Dict $entity
   *
   * @return array
   */
  public function transform(Dict $entity)
  {
    $response = [
      'object' => 'Dict',
      'id' => $entity->getHashedKey(),
      'created_at' => $entity->created_at,
      'updated_at' => $entity->updated_at,

    ];

    $response = $this->ifAdmin([
      'real_id' => $entity->id,
    ], $response);

    return $response;
  }
}
