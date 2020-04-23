<?php

namespace App\Containers\User\UI\API\Transformers;

use App\Containers\Address\UI\API\Transformers\AddressTransformer;
use App\Containers\Authorization\UI\API\Transformers\RoleTransformer;
use App\Containers\User\Models\User;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class UserTransformer.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UserTransformer extends Transformer
{

	/**
	 * @var  array
	 */
	protected $availableIncludes = [
		'roles',
		'address',
	];

	/**
	 * @var  array
	 */
	protected $defaultIncludes = [
	];

	/**
	 * @param \App\Containers\User\Models\User $user
	 *
	 * @return array
	 */
	public function transform(User $user)
	{
		$response = $user->toArray();
		$response['object'] = 'User';
		return $response;
	}

	public function includeAddress(User $user)
	{
		return $this->item($user->address()->first(), new AddressTransformer());
	}

	public function includeRoles(User $user)
	{
		return $this->collection($user->roles, new RoleTransformer());
	}

}
