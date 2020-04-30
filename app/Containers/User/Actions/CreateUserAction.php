<?php

namespace App\Containers\User\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\User\Models\User;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

/**
 * Class CreateAdminAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class CreateUserAction extends Action
{

	/**
	 * @param DataTransporter $data
	 *
	 * @return  User
	 */
	public function run(DataTransporter $data): User
	{
		$user = Apiato::call('User@CreateUserByCredentialsTask', [
			$data->username,
			$data->realname,
			$data->phonenumber,
			$data->password,
			$data->address_id,
			$data->activated,
		]);

		// NOTE: if not using a single general role for all Admins, comment out that line below. And assign Roles
		$roles = (array)$data->roles->data;
		$roles = array_map(function ($role) {
			return Apiato::call('Authorization@FindRoleTask', [$role->id]);
		}, $roles);

		$user = Apiato::call('Authorization@AssignUserToRoleTask', [$user, $roles]);

		return $user;
	}
}
