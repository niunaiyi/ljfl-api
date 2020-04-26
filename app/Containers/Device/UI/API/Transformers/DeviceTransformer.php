<?php

namespace App\Containers\Device\UI\API\Transformers;

use App\Containers\Address\UI\API\Transformers\AddressTransformer;
use App\Containers\Device\Models\Device;
use App\Containers\User\UI\API\Transformers\UserTransformer;
use App\Ship\Parents\Transformers\Transformer;

class DeviceTransformer extends Transformer
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
	 * @param Device $entity
	 *
	 * @return array
	 */
	public function transform(Device $entity)
	{
		$response = $entity->toArray();
		$response ['object'] = 'Device';

		return $response;
	}


	public function includeAddress(Device $device)
	{
		return $this->item($device->address()->first(), new AddressTransformer());
	}


	public function includeUser(Device $device)
	{
		return $this->item($device->user()->first(), new UserTransformer());
	}
}
