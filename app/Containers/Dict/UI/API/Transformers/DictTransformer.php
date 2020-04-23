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
		$response = $entity->toArray();

		return $response;
	}
}
