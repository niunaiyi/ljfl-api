<?php

namespace App\Containers\Authorization\UI\API\Transformers;

use App\Containers\Authorization\Models\Permission;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class PermissionTransformer.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class PermissionTransformer extends Transformer
{

	protected $availableIncludes = [

	];

	protected $defaultIncludes = [

	];

	/**
	 * @param Permission $permission
	 *
	 * @return array
	 */
	public function transform(Permission $permission)
	{
		$data = $permission->toArray();
		$data['object'] = 'Permission';
		return $data;
	}

}
