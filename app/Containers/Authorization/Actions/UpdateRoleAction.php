<?php

namespace App\Containers\Authorization\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;
use App\Ship\Parents\Requests\Request;
use Spatie\Permission\Contracts\Role;

/**
 * Class DeleteRoleAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UpdateRoleAction extends Action
{

	/**
	 * @param DataTransporter $data
	 *
	 * @return  Role
	 */
	public function run(Request $request): Role
	{

		$data = $request->sanitizeInput([
			'name',
			'display_name',
			'description',
		]);

		if ($request->has('permissions')) {
			$role = Apiato::call('Authorization@AssignRoleToPermissionTask', [$request->id, $request->permissions['data']]);
		}

		$role = Apiato::call('Authorization@UpdateRoleTask', [$request->id, $data]);
		return $role;
	}
}
