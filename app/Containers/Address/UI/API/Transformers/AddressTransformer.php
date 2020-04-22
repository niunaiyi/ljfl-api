<?php

namespace App\Containers\Address\UI\API\Transformers;

use App\Containers\Address\Models\Address;
use App\Ship\Parents\Transformers\Transformer;

class AddressTransformer extends Transformer
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
	 * @param Address $entity
	 *
	 * @return array
	 */
	public function transform(Address $entity)
	{
		$parent = $entity->parent()->first();
		$parent_id = $parent ? $parent->id : null;

		$response = $entity->toArray();

		$response['object'] = 'Address';
		$response['hasChildren'] = $entity->children()->count() > 0;
		$response['parent_id'] = (string)$parent_id;

		return $response;
	}
}
