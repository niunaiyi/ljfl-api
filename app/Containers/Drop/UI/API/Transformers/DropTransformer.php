<?php

namespace App\Containers\Drop\UI\API\Transformers;

use App\Containers\Drop\Models\Drop;
use App\Ship\Parents\Transformers\Transformer;

class DropTransformer extends Transformer
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
	 * @param Drop $entity
	 *
	 * @return array
	 */
	public function transform(Drop $entity)
	{
		$response = $entity->toArray();
		$response ['object'] = 'Drop';

		return $response;
	}
}
