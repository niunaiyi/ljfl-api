<?php

namespace App\Containers\Customer\UI\API\Transformers;

use App\Containers\Address\UI\API\Transformers\AddressTransformer;
use App\Containers\Customer\Models\Customer;
use App\Ship\Parents\Transformers\Transformer;

class CustomerTransformer extends Transformer
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
		'addresses',
	];

	/**
	 * @param Customer $entity
	 *
	 * @return array
	 */
	public function transform(Customer $entity)
	{
		$response = $entity->toArray();
		$response ['object'] = 'Customer';

		return $response;
	}

	public function includeAddresses(Customer $customer)
	{
		return $this->collection($customer->addresses()->get(), new AddressTransformer());
	}
}
