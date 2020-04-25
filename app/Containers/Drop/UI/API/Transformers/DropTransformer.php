<?php

namespace App\Containers\Drop\UI\API\Transformers;

use App\Containers\Customer\UI\API\Transformers\CustomerTransformer;
use App\Containers\Device\UI\API\Transformers\DeviceTransformer;
use App\Containers\Dict\UI\API\Transformers\DictTransformer;
use App\Containers\Drop\Models\Drop;
use App\Containers\User\UI\API\Transformers\UserTransformer;
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
		'user',
		'customer',
		'device',
		'ljlx',
		'ljxl',
		'jlbz',
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

	public function includeUser(Drop $drop)
	{
		return $this->item($drop->user()->first(), new UserTransformer());
	}

	public function includeCustomer(Drop $drop)
	{
		return $this->item($drop->customer()->first(), new CustomerTransformer());
	}

	public function includeLjlx(Drop $drop)
	{
		$dict = $drop->ljlx()->first();
		return $this->item($dict, new DictTransformer());
	}

	public function includeLjxl(Drop $drop)
	{
		$dict = $drop->ljxl()->first();
		return $this->item($dict, new DictTransformer());
	}

	public function includeJlbz(Drop $drop)
	{
		$dict = $drop->jlbz()->first();
		return $this->item($dict, new DictTransformer());
	}

	public function includeDevice(Drop $drop)
	{
		return $this->item($drop->device()->first(), new DeviceTransformer());
	}
}
