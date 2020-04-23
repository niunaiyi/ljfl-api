<?php

namespace App\Containers\User\UI\API\Transformers;

use App\Containers\Authorization\UI\API\Transformers\RoleTransformer;
use App\Containers\User\Models\User;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class UserPrivateProfileTransformer.
 *
 * @author Johannes Schobel <johannes.schobel@googlemail.com>
 */
class UserPrivateProfileTransformer extends Transformer
{

	/**
	 * @var  array
	 */
	protected $availableIncludes = [
		'roles',
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
		$response  ['object'] = 'User';

		return $response;
	}

	public function includeRoles(User $user)
	{
		return $this->collection($user->roles, new RoleTransformer());
	}

}
