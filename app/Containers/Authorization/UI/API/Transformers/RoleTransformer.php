<?php

namespace App\Containers\Authorization\UI\API\Transformers;

use App\Containers\Authorization\Models\Role;
use App\Ship\Parents\Transformers\Transformer;
use League\Fractal\Resource\Collection;

/**
 * Class RoleTransformer.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class RoleTransformer extends Transformer
{

	protected $availableIncludes = [

	];

	protected $defaultIncludes = [
		'permissions'
	];

	/**
	 * @param Role $role
	 *
	 * @return array
	 */
	public function transform(Role $role)
	{
		$reponse = $role->toArray();
		$reponse['object'] = 'Role';
		return $reponse;
	}

	/**
	 * @param Role $role
	 *
	 * @return  Collection
	 */
	public function includePermissions(Role $role)
	{
		return $this->collection($role->permissions, new PermissionTransformer());
	}

}
