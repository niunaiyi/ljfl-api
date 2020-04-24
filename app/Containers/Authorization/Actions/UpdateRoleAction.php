<?php

namespace App\Containers\Authorization\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;
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
	public function run(DataTransporter $data): Role
	{
		$role = Apiato::call('Authorization@FindRoleTask', [$data->id]);

		Apiato::call('Authorization@UpdateRoleTask', [$role]);

		return $role;
	}
}
