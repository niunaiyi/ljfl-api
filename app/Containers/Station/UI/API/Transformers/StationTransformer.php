<?php

namespace App\Containers\Station\UI\API\Transformers;

use App\Containers\Address\UI\API\Transformers\AddressTransformer;
use App\Containers\Station\Models\Station;
use App\Containers\User\UI\API\Transformers\UserTransformer;
use App\Ship\Parents\Transformers\Transformer;

class StationTransformer extends Transformer
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
		'user',
		'address',
	];

	/**
	 * @param Station $entity
	 *
	 * @return array
	 */
	public function transform(Station $entity)
	{
		$response = $entity->toArray();
		$response ['object'] = 'Station';

		return $response;
	}


	public function includeAddress(Station $station)
	{
		return $this->item($station->address()->first(), new AddressTransformer());
	}


	public function includeUser(Station $station)
	{
		return $this->item($station->user()->first(), new UserTransformer());
	}
}
